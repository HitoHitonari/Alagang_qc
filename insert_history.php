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

// Prepare and sanitize input
$firstName = $conn->real_escape_string($data['firstName']);
$lastName = $conn->real_escape_string($data['lastName']);
$age = (int)$data['age'];
$gender = $conn->real_escape_string($data['gender']);
$dob = $conn->real_escape_string($data['birthDate']);
$phone = $conn->real_escape_string($data['phone']);
$address = $conn->real_escape_string($data['address']);
$emergencyName = $conn->real_escape_string($data['emergencyName']);
$emergencyPhone = $conn->real_escape_string($data['emergencyPhone']);
$emergencyRelationship = $conn->real_escape_string($data['emergencyRelationship']);
$bloodType = $conn->real_escape_string($data['bloodType']);
$vaccinations = isset($data['vaccinations']) ? implode(", ", (array)$data['vaccinations']) : '';
$allergies = $conn->real_escape_string($data['allergies']);
$currentMedications = $conn->real_escape_string($data['currentMedications']);
$medicalHistory = $conn->real_escape_string($data['medicalHistory']);
$familyHistory = $conn->real_escape_string($data['familyHistory']);
$smoking = $conn->real_escape_string($data['smoking']);
$alcohol = $conn->real_escape_string($data['alcohol']);
$exercise = $conn->real_escape_string($data['exerciseFrequency']);
$insuranceProvider = $conn->real_escape_string($data['insuranceProvider']);
$policyNumber = $conn->real_escape_string($data['policyNumber']);

// Check if record already exists
$checkSql = "SELECT email FROM history WHERE email = '$email'";
$checkResult = $conn->query($checkSql);

if ($checkResult->num_rows > 0) {
  // Update existing record
  $sql = "UPDATE history SET
    firstname = '$firstName',
    lastname = '$lastName',
    age = $age,
    gender = '$gender',
    dob = '$dob',
    phone = '$phone',
    address = '$address',
    emergency_name = '$emergencyName',
    emergency_phone = '$emergencyPhone',
    emergency_relationship = '$emergencyRelationship',
    blood_type = '$bloodType',
    vaccinations = '$vaccinations',
    allergies = '$allergies',
    current_medications = '$currentMedications',
    medical_history = '$medicalHistory',
    family_history = '$familyHistory',
    smoking = '$smoking',
    alcohol = '$alcohol',
    exercise_frequency = '$exercise',
    insurance_provider = '$insuranceProvider',
    policy_number = '$policyNumber'
    WHERE email = '$email'";
} else {
  // Insert new record
  $sql = "INSERT INTO history (
    email, firstname, lastname, age, gender, dob, phone, address,
    emergency_name, emergency_phone, emergency_relationship,
    blood_type, vaccinations, allergies, current_medications,
    medical_history, family_history, smoking, alcohol, exercise_frequency,
    insurance_provider, policy_number
  ) VALUES (
    '$email', '$firstName', '$lastName', $age, '$gender', '$dob', '$phone', '$address',
    '$emergencyName', '$emergencyPhone', '$emergencyRelationship',
    '$bloodType', '$vaccinations', '$allergies', '$currentMedications',
    '$medicalHistory', '$familyHistory', '$smoking', '$alcohol', '$exercise',
    '$insuranceProvider', '$policyNumber'
  )";
}

if ($conn->query(query: $sql) === TRUE) {
  echo "success";
} else {
  http_response_code(500);
  echo "Error: " . $conn->error;
}

$conn->close();
