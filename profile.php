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
$sql = "SELECT * FROM infos WHERE email = '$email'";
$result = $conn->query($sql);

$user = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="profile.css" />
    <title>Profile - Alagang Bayan</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>

    <aside class="sidebar">
  <button class="menu-toggle" onclick="toggleSidebar()">&#9776;</button>
  <nav class="sidebar-menu">
    <a href="profile.php" class="menu-item">
      <img src="./imgs/user.svg" alt="Home" />
      <span class="label">User Profile</span>
    </a>
    <a href="book-appointment.php" class="menu-item">
      <img src="./imgs/appointment.svg" alt="Profile" />
      <span class="label">Book an Appointment</span>
    </a>
    <a href="medical-history.php" class="menu-item">
      <img src="./imgs/history.svg" alt="Profile" />
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
            <a href="<?php echo isset($_SESSION['emailaddress']) ? 'loggedin.php' : 'index.html'; ?>" class="nav-link redirect">HOME</a>
          </div>
          <div class="TEXT-HOVER">
            <a href="aboutus.php" class="nav-link">ABOUT US</a>
          </div>
          <div class="TEXT-HOVER">
            <a href="services.php" class="nav-link">SERVICES</a>
          </div>
          <div class="LOCATION-DROPDOWN">
            <button class="dropdown-button" aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
              <span class="text-wrapper-2">LOCATION</span>
              <img class="ri-arrow-down-s-line" src="./imgs/ri_arrow-down-s-line.png" alt="Dropdown arrow" />
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

    <!-- PROFILE SECTION -->
    <section class="profile-section">
      <div class="profile-container">
        <!-- User Info Box -->
        <div class="user-info-box">
          <div class="profile-avatar">
            <img src="./imgs/profile.png" alt="User Avatar" onerror="this.onerror=null; this.src='./imgs/avatar_placeholder.png';" />
          </div>
          <div class="profile-name-role">
            <h1><?php echo isset($_SESSION['fullname']) ? htmlspecialchars($_SESSION['fullname']) : 'Unknown User'; ?></h1>
            <p class="role">Patient</p>
          </div>
          <button class="edit-profile-button">Edit Profile</button>
        </div>

        <!-- White Bar for Personal Information -->
        <div class="info-bar">
          <div class="profile-details">
            <div class="personal-info card">
              <h2>Personal Information</h2>
              <table>
                <tbody>
                  <tr><td class="label">First Name</td><td><?php echo htmlspecialchars($user['firstname']); ?></td></tr>
                  <tr><td class="label">Last Name</td><td><?php echo htmlspecialchars($user['lastname']); ?></td></tr>
                  <tr><td class="label">Phone Number</td><td><?php echo htmlspecialchars($user['phone']); ?></td></tr>
                  <tr><td class="label">Gender</td><td><?php echo htmlspecialchars($user['gender']); ?></td></tr>
                  <tr><td class="label">Age</td><td><?php echo htmlspecialchars($user['age']); ?></td></tr>
                  <tr><td class="label">Date of Birth</td><td><?php echo htmlspecialchars($user['dob']); ?></td></tr>
                  <tr><td class="label">Email</td><td><?php echo htmlspecialchars($user['email']); ?></td></tr>
                </tbody>
              </table>
            </div>

            <div class="address-info card">
              <h2>Complete Address</h2>
              <table>
                <tbody>
                  <tr><td class="label">Street</td><td><?php echo htmlspecialchars($user['street']); ?></td></tr>
                  <tr><td class="label">Postal Code</td><td><?php echo htmlspecialchars($user['postal']); ?></td></tr>
                  <tr><td class="label">District</td><td><?php echo htmlspecialchars($user['district']); ?></td></tr>
                  <tr><td class="label">Barangay</td><td><?php echo htmlspecialchars($user['barangay']); ?></td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
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
              <li><a href="#" class="footer-support-link">FAQS</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- DROPDOWN SCRIPT -->
    <script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('.edit-profile-button').addEventListener('click', function () {
    Swal.fire({
      title: 'Edit Profile',
      html: `
        <style>
          .swal2-form-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
          }
          .swal2-form-row label {
            flex: 1;
            text-align: right;
            margin-right: 10px;
            font-weight: bold;
          }
          .swal2-form-row input,
          .swal2-form-row select {
            flex: 2;
            padding: 6px;
            font-size: 14px;
          }
        </style>

        <div class="swal2-form-row"><label for="swal-input1">First Name</label><input id="swal-input1" value="<?php echo htmlspecialchars($user['firstname']); ?>"></div>
        <div class="swal2-form-row"><label for="swal-input2">Last Name</label><input id="swal-input2" value="<?php echo htmlspecialchars($user['lastname']); ?>"></div>
        <div class="swal2-form-row"><label for="swal-input3">Phone</label><input id="swal-input3" value="<?php echo htmlspecialchars($user['phone']); ?>"></div>
        <div class="swal2-form-row">
          <label for="swal-input4">Gender</label>
          <select id="swal-input4">
            <option value="">Select</option>
            <option value="Male" <?php if ($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if ($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if ($user['gender'] == 'Other') echo 'selected'; ?>>Other</option>
          </select>
        </div>
        <div class="swal2-form-row"><label for="swal-input5">Age</label><input id="swal-input5" value="<?php echo htmlspecialchars($user['age']); ?>"></div>
        <div class="swal2-form-row"><label for="swal-input6">Date of Birth</label><input id="swal-input6" type="date" value="<?php echo htmlspecialchars($user['dob']); ?>"></div>
        <div class="swal2-form-row"><label for="swal-input7">Email</label><input id="swal-input7" value="<?php echo htmlspecialchars($user['email']); ?>"></div>
        <div class="swal2-form-row"><label for="swal-input8">Street</label><input id="swal-input8" value="<?php echo htmlspecialchars($user['street']); ?>"></div>
        <div class="swal2-form-row"><label for="swal-input9">Postal Code</label><input id="swal-input9" value="<?php echo htmlspecialchars($user['postal']); ?>"></div>
        <div class="swal2-form-row">
          <label for="swal-input10">District</label>
          <select id="swal-input10">
            <option value="">Select</option>
            <option value="District I" <?php if ($user['district'] == 'District I') echo 'selected'; ?>>District I</option>
            <option value="District II" <?php if ($user['district'] == 'District II') echo 'selected'; ?>>District II</option>
            <option value="District III" <?php if ($user['district'] == 'District III') echo 'selected'; ?>>District III</option>
            <option value="District IV" <?php if ($user['district'] == 'District IV') echo 'selected'; ?>>District IV</option>
            <option value="District V" <?php if ($user['district'] == 'District V') echo 'selected'; ?>>District V</option>
            <option value="District VI" <?php if ($user['district'] == 'District VI') echo 'selected'; ?>>District VI</option>
          </select>
        </div>
        <div class="swal2-form-row"><label for="swal-input11">Barangay</label><input id="swal-input11" value="<?php echo htmlspecialchars($user['barangay']); ?>"></div>
      `,
      showCancelButton: true,
      confirmButtonText: 'Save',
      preConfirm: () => {
        return {
          firstName: document.getElementById('swal-input1').value,
          lastName: document.getElementById('swal-input2').value,
          phone: document.getElementById('swal-input3').value,
          gender: document.getElementById('swal-input4').value,
          age: document.getElementById('swal-input5').value,
          dob: document.getElementById('swal-input6').value,
          email: document.getElementById('swal-input7').value,
          street: document.getElementById('swal-input8').value,
          postal: document.getElementById('swal-input9').value,
          district: document.getElementById('swal-input10').value,
          barangay: document.getElementById('swal-input11').value
        };
      }
    }).then((result) => {
      if (result.isConfirmed) {
        fetch('update_profile.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(result.value)
        })
        .then(response => {
          if (!response.ok) return response.text().then(text => { throw new Error(text); });
          return response.text();
        })
        .then(text => {
          Swal.fire('Updated!', 'Your profile has been saved.', 'success').then(() => {
          location.reload();
        });
        })
          .catch(err => {
          Swal.fire('Error', err.message, 'error');
        });
      }
    });
  });
});
</script>


<script>
  function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('expanded');
  }
</script>


  </body>
</html>
