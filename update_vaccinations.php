<?php
session_start();

if (!isset($_SESSION['emailaddress'])) {
  die("Unauthorized");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$vaccines = $_POST['vaccines'] ?? [];

// 1. Clear old vaccinations for this user
$conn->query("DELETE FROM vaccinations WHERE email = '$email'");

// 2. Insert new vaccinations
$vaccineNames = [];

foreach ($vaccines as $v) {
  if (!empty($v['name'])) {
    $name = $conn->real_escape_string($v['name']);
    $adminDate = $conn->real_escape_string($v['date_administered'] ?? '');
    $provider = $conn->real_escape_string($v['provider'] ?? '');
    $dueDate = $conn->real_escape_string($v['due_date'] ?? '');

    $conn->query("INSERT INTO vaccinations (email, vaccine_name, date_administered, provider, next_due_date)
                  VALUES ('$email', '$name', '$adminDate', '$provider', '$dueDate')");
    
    $vaccineNames[] = $name;
  }
}

// 3. Sync with history table
// Step 3: Re-fetch and sync vaccination summary into 'history'
$summaryQuery = $conn->prepare("SELECT GROUP_CONCAT(vaccine_name SEPARATOR ', ') as summary FROM vaccinations WHERE email = ?");
$summaryQuery->bind_param("s", $email);
$summaryQuery->execute();
$summaryResult = $summaryQuery->get_result();
$summary = $summaryResult->fetch_assoc()['summary'] ?? '';

$updateHistory = $conn->prepare("UPDATE history SET vaccinations = ? WHERE email = ?");
$updateHistory->bind_param("ss", $summary, $email);
$updateHistory->execute();

$stmt = $conn->prepare("UPDATE history SET vaccinations = ? WHERE email = ?");
$stmt->bind_param("ss", $vaccinationList, $email);
$stmt->execute();

$conn->close();
header("Location: admin_dashboard.php?updated=success" . urlencode($email));
exit;
