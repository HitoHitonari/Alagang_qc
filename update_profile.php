<?php
session_start();

if (!isset($_SESSION['emailaddress'])) {
  http_response_code(403);
  echo "Not authorized.";
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  http_response_code(500);
  echo "Database connection failed.";
  exit;
}

$email = $_SESSION['emailaddress'];
$data = json_decode(file_get_contents("php://input"), true);

// Sanitize input
$firstName = $conn->real_escape_string($data['firstName']);
$lastName = $conn->real_escape_string($data['lastName']);
$phone = $conn->real_escape_string($data['phone']);
$gender = $conn->real_escape_string($data['gender']);
$age = (int)$data['age'];
$dob = $conn->real_escape_string($data['dob']);
$userEmail = $conn->real_escape_string($data['email']);
$street = $conn->real_escape_string($data['street']);
$postal = $conn->real_escape_string($data['postal']);
$district = $conn->real_escape_string($data['district']);
$barangay = $conn->real_escape_string($data['barangay']);

// Use correct column names — assume they're the same as profile.php
$sql = "UPDATE infos SET 
  firstname = '$firstName',
  lastname = '$lastName',
  phone = '$phone',
  gender = '$gender',
  age = $age,
  dob = '$dob',
  email = '$userEmail',
  street = '$street',
  postal = '$postal',
  district = '$district',
  barangay = '$barangay'
WHERE email = '$email'";

if ($conn->query($sql) === TRUE) {
  $_SESSION['emailaddress'] = $userEmail;
  echo "success";
} else {
  http_response_code(500);
  echo "Update failed: " . $conn->error;
}

$conn->close();
