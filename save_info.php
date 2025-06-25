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

$data = json_decode(file_get_contents("php://input"), true);
$email = $_SESSION['emailaddress'];

$firstName = $conn->real_escape_string($data['firstName']);
$lastName = $conn->real_escape_string($data['lastName']);
$phone = $conn->real_escape_string($data['phone']);
$gender = $conn->real_escape_string($data['gender']);
$age = (int)$data['age'];
$dob = $conn->real_escape_string($data['dob']);
$street = $conn->real_escape_string($data['street']);
$postal = $conn->real_escape_string($data['postal']);
$district = $conn->real_escape_string($data['district']);
$barangay = $conn->real_escape_string($data['barangay']);

$sql = "INSERT INTO infos (email, firstname, lastname, phone, gender, age, dob, street, postal, district, barangay)
        VALUES ('$email', '$firstName', '$lastName', '$phone', '$gender', $age, '$dob', '$street', '$postal', '$district', '$barangay')";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  http_response_code(500);
  echo "Error saving data: " . $conn->error;
}

$conn->close();
?>
