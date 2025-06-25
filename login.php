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
$pass = md5($_POST['password']); // use password_hash() in real apps

$sql = "SELECT * FROM login WHERE emailaddress='$email' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  // ✅ Set session
  $_SESSION['emailaddress'] = $email;
  $_SESSION['fullname'] = $row['fullname'];

  $alert = [
    "icon" => "success",
    "title" => "Login Successful",
    "text" => "Welcome, $email!",
    "redirect" => "loggedin.php"
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
