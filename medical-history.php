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

$email = $_SESSION['emailaddress'];
$sql = "SELECT * FROM history WHERE email = '$email'";
$result = $conn->query($sql);
$history = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medical History - Alagang Bayan</title>
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="profile.css" />
</head>
<body>

<aside class="sidebar">
  <button class="menu-toggle" onclick="toggleSidebar()">&#9776;</button>
  <nav class="sidebar-menu">
    <a href="profile.php" class="menu-item">
      <img src="./imgs/user.svg" alt="User Profile" />
      <span class="label">User Profile</span>
    </a>
    <a href="book-appointment.php" class="menu-item">
      <img src="./imgs/appointment.svg" alt="Book Appointment" />
      <span class="label">Book an Appointment</span>
    </a>
    <a href="medical-history.php" class="menu-item">
      <img src="./imgs/history.svg" alt="Medical History" />
      <span class="label">Medical History</span>
    </a>
  </nav>
</aside>

<!-- HEADER -->
<div class="HEADER">
  <header class="header">
    <div class="frame">
      <div class="LOGO"></div>
    </div>
    <div class="div">
      <div class="TEXT-HOVER">
        <a href="loggedin.php" class="nav-link">HOME</a>
      </div>
      <div class="TEXT-HOVER">
        <a href="aboutus.php" class="nav-link">ABOUT US</a>
      </div>
      <div class="TEXT-HOVER">
        <a href="services.php" class="nav-link">SERVICES</a>
      </div>
      <div class="LOCATION-DROPDOWN">
        <button class="dropdown-button" onclick="toggleDropdown()">
          <span class="text-wrapper-2">LOCATION</span>
          <img src="./imgs/ri_arrow-down-s-line.png" alt="Dropdown arrow" />
        </button>
        <div class="dropdown-menu" id="locationDropdown">
          <a href="district_1.php" class="dropdown-item">District I</a>
          <a href="district_2.php" class="dropdown-item">District II</a>
          <a href="district_3.php" class="dropdown-item">District III</a>
          <a href="district_4.php" class="dropdown-item">District IV</a>
          <a href="district_5.php" class="dropdown-item">District V</a>
          <a href="district_6.php" class="dropdown-item">District VI</a>
        </div>
      </div>
    </div>
  </header>
</div>

<!-- MEDICAL HISTORY SECTION -->
<section class="profile-section">
  <div class="profile-container">
    <div class="user-info-box">
      <div class="profile-avatar">
        <img src="./imgs/profile.png" alt="User Avatar" />
      </div>
      <div class="profile-name-role">
        <h1><?php echo isset($_SESSION['fullname']) ? htmlspecialchars($_SESSION['fullname']) : 'Unknown User'; ?></h1>
        <p class="role">Patient</p>
      </div>
    </div>

    <div class="info-bar">
      <div class="profile-details">

        <div class="personal-info card">
          <h2>Emergency Contact</h2>
          <table>
            <tbody>
              <?php if ($history): ?>
              <tr><td class="label">Name</td><td><?php echo htmlspecialchars($history['emergency_name']); ?></td></tr>
              <tr><td class="label">Phone</td><td><?php echo htmlspecialchars($history['emergency_phone']); ?></td></tr>
              <tr><td class="label">Relationship</td><td><?php echo htmlspecialchars($history['emergency_relationship']); ?></td></tr>
              <?php else: ?>
              <tr><td colspan="2">No emergency contact information available.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="address-info card">
          <h2>Medical Information</h2>
          <table>
            <tbody>
              <?php if ($history): ?>
              <tr><td class="label">Blood Type</td><td><?php echo htmlspecialchars($history['blood_type']); ?></td></tr>
              <tr><td class="label">Vaccinations</td><td><?php echo htmlspecialchars($history['vaccinations']); ?></td></tr>
              <tr><td class="label">Allergies</td><td><?php echo htmlspecialchars($history['allergies']); ?></td></tr>
              <tr><td class="label">Current Medications</td><td><?php echo htmlspecialchars($history['current_medications']); ?></td></tr>
              <tr><td class="label">Medical History</td><td><?php echo htmlspecialchars($history['medical_history']); ?></td></tr>
              <tr><td class="label">Family History</td><td><?php echo htmlspecialchars($history['family_history']); ?></td></tr>
              <?php else: ?>
              <tr><td colspan="2">No medical information available.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="personal-info card">
          <h2>Lifestyle Information</h2>
          <table>
            <tbody>
              <?php if ($history): ?>
              <tr><td class="label">Smoking</td><td><?php echo htmlspecialchars($history['smoking']); ?></td></tr>
              <tr><td class="label">Alcohol</td><td><?php echo htmlspecialchars($history['alcohol']); ?></td></tr>
              <tr><td class="label">Exercise</td><td><?php echo htmlspecialchars($history['exercise_frequency']); ?></td></tr>
              <?php else: ?>
              <tr><td colspan="2">No lifestyle information available.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="address-info card">
          <h2>Insurance Information</h2>
          <table>
            <tbody>
              <?php if ($history): ?>
              <tr><td class="label">Provider</td><td><?php echo htmlspecialchars($history['insurance_provider']); ?></td></tr>
              <tr><td class="label">Policy Number</td><td><?php echo htmlspecialchars($history['policy_number']); ?></td></tr>
              <?php else: ?>
              <tr><td colspan="2">No insurance information available.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</section>

<footer class="footer-section">
  <div class="footer-background">
    <div class="footer-content">
      <div class="footer-left">
        <h3 class="footer-title">ALAGANG BAYAN:</h3>
        <p class="footer-subtitle">QUEZON CITY MUNICIPAL HEALTH INFORMATION SYSTEM</p>
        <div class="social-media-icons">
          <img src="./imgs/fb_Icon.svg" alt="Facebook" class="social-icon" />
          <img src="./imgs/linkedin_Icon.svg" alt="LinkedIn" class="social-icon" />
          <img src="./imgs/yt_Icon.svg" alt="YouTube" class="social-icon" />
          <img src="./imgs/ig_Icon.svg" alt="Instagram" class="social-icon" />
        </div>
      </div>
      <div class="footer-center">
        <h4 class="footer-heading">Hotlines:</h4>
        <p class="footer-phone">+1702921379</p>
        <p class="footer-phone">+09123456789</p>
      </div>
      <div class="footer-right">
        <h4 class="footer-heading">Email Us:</h4>
        <p class="footer-email">alagangbayan.qc.ph@gmail.com</p>
        <p class="footer-email">info@alagangbayan.qc.ph</p>
        <h4 class="footer-heading">Support:</h4>
        <ul class="footer-support-list">
          <li><a href="feedback.php" class="footer-support-link">Feedback Form</a></li>
          <li><a href="#" class="footer-support-link">Chatbot</a></li>
          <li><a href="#" class="footer-support-link">FAQs</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script>
function toggleSidebar() {
  const sidebar = document.querySelector('.sidebar');
  sidebar.classList.toggle('expanded');
}
function toggleDropdown() {
  const menu = document.getElementById("locationDropdown");
  menu.classList.toggle("show");
}
</script>

</body>
</html>
