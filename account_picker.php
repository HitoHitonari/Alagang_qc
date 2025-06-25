<?php
session_start();

if (!isset($_SESSION['emailaddress'])) {
  header("Location: index.html");
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get all emails from 'infos' table
$accounts = [];
$emailQuery = "SELECT email FROM infos";
$emailResult = $conn->query($emailQuery);
if ($emailResult->num_rows > 0) {
  while ($row = $emailResult->fetch_assoc()) {
    $accounts[] = $row['email'];
  }
}

// Determine which email to show
$selectedEmail = isset($_GET['selected_email']) ? $_GET['selected_email'] : $_SESSION['emailaddress'];

// Get the selected user's info using a prepared statement
$user = null;
$stmt = $conn->prepare("SELECT * FROM infos WHERE email = ?");
$stmt->bind_param("s", $selectedEmail);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Account Viewer</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background-color: #f9f9f9;
    }
    h2 {
      margin-bottom: 10px;
    }
    select {
      padding: 8px;
      font-size: 16px;
      margin-bottom: 20px;
    }
    table {
      border-collapse: collapse;
      margin-top: 10px;
      width: 100%;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    table, th, td {
      border: 1px solid #ccc;
      padding: 10px;
    }
    th {
      background-color: #f0f0f0;
      text-align: left;
    }
  </style>
</head>
<body>

  <h2>Select an Account</h2>
  <form method="GET" id="accountPickerForm">
    <select name="selected_email" onchange="document.getElementById('accountPickerForm').submit()">
      <option value="">-- Select an account --</option>
      <?php foreach ($accounts as $accEmail): ?>
        <option value="<?php echo htmlspecialchars($accEmail); ?>" <?php if ($selectedEmail === $accEmail) echo 'selected'; ?>>
          <?php echo htmlspecialchars($accEmail); ?>
        </option>
      <?php endforeach; ?>
    </select>
  </form>

  <?php if ($user): ?>
    <h3>Account Information</h3>
    <table>
      <tr><th>First Name</th><td><?php echo htmlspecialchars($user['firstname']); ?></td></tr>
      <tr><th>Last Name</th><td><?php echo htmlspecialchars($user['lastname']); ?></td></tr>
      <tr><th>Phone</th><td><?php echo htmlspecialchars($user['phone']); ?></td></tr>
      <tr><th>Gender</th><td><?php echo htmlspecialchars($user['gender']); ?></td></tr>
      <tr><th>Age</th><td><?php echo htmlspecialchars($user['age']); ?></td></tr>
      <tr><th>Date of Birth</th><td><?php echo htmlspecialchars($user['dob']); ?></td></tr>
      <tr><th>Email</th><td><?php echo htmlspecialchars($user['email']); ?></td></tr>
      <tr><th>Street</th><td><?php echo htmlspecialchars($user['street']); ?></td></tr>
      <tr><th>Postal Code</th><td><?php echo htmlspecialchars($user['postal']); ?></td></tr>
      <tr><th>District</th><td><?php echo htmlspecialchars($user['district']); ?></td></tr>
      <tr><th>Barangay</th><td><?php echo htmlspecialchars($user['barangay']); ?></td></tr>
    </table>
  <?php else: ?>
    <p>No data found for this user.</p>
  <?php endif; ?>

</body>
</html>
