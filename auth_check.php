<?php
session_start();

if (!isset($_SESSION['emailaddress'])) {
  // Not logged in
  header("Location: login.html");
  exit();
}
?>
