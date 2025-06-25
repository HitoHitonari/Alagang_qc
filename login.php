<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['emailaddress'];
$pass = md5($_POST['password']); // ✅ Use password_hash() in production

// Use prepared statement to avoid SQL injection
$stmt = $conn->prepare("SELECT * FROM login WHERE emailaddress = ? AND password = ?");
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  // ✅ Set session variables
  $_SESSION['emailaddress'] = $row['emailaddress'];
  $_SESSION['fullname'] = $row['fullname'];
  $_SESSION['role'] = $row['role']; // Assumes a 'role' column exists

  // ✅ Redirect based on role
  $redirect = ($row['role'] === 'admin') ? 'admin_dashboard.php' : 'loggedin.php';

  $alert = [
    "icon" => "success",
    "title" => "Login Successful",
    "text" => "Welcome, {$row['fullname']}!",
    "redirect" => $redirect
  ];
} else {
  $alert = [
    "icon" => "error",
    "title" => "Invalid Login",
    "text" => "Incorrect email or password.",
    "redirect" => "login.html"
  ];
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <script>
    Swal.fire({
      icon: '<?= $alert["icon"] ?>',
      title: '<?= $alert["title"] ?>',
      text: '<?= $alert["text"] ?>'
    }).then(() => {
      window.location.href = '<?= $alert["redirect"] ?>';
    });
  </script>
</body>
</html>
