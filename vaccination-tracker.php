<?php
session_start();

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$vaccines = [];
if (isset($_SESSION['emailaddress'])) {
  $email = $_SESSION['emailaddress'];
  $sql = "SELECT vaccinations FROM history WHERE email = '$email'";
  $result = $conn->query($sql);
  if ($result && $row = $result->fetch_assoc()) {
    $vaccinations = $row['vaccinations'];
    $vaccines = array_map('trim', explode(',', $vaccinations));
  }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Vaccination Tracker - Alagang Bayan</title>
</head>
<body class="vaccination-tracker-body">
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

  <header class="vaccination-tracker-header">
    <h1>Vaccination Tracker</h1>
    <p>Track your vaccination history and stay up-to-date with your immunizations</p>
  </header>

  <main class="vaccination-main-content">
    <section class="vaccine-info">
      <h2>Vaccination Information</h2>
      <p>Stay protected by keeping track of your vaccinations. Regular immunizations help prevent serious diseases and protect both you and your community.</p>

      <div class="vaccination-cards">
        <div class="vaccination-card">
          <h3>COVID-19 Vaccine</h3>
          <p>Protects against COVID-19 and its variants. Booster shots recommended annually.</p>
          <span class="vaccination-status completed">Completed</span>
        </div>

        <div class="vaccination-card">
          <h3>Influenza (Flu) Vaccine</h3>
          <p>Annual vaccination recommended to protect against seasonal flu strains.</p>
          <span class="vaccination-status pending">Due Soon</span>
        </div>

        <div class="vaccination-card">
          <h3>Hepatitis B Vaccine</h3>
          <p>Three-dose series that provides long-term protection against Hepatitis B.</p>
          <span class="vaccination-status completed">Completed</span>
        </div>
      </div>
    </section>

    <section class="vaccine-history">
      <h2 class="vaccination-tracker-h2">Your Vaccination History</h2>
      <p>Below is a complete record of your vaccinations. Keep this information updated and consult with your healthcare provider about any missing immunizations.</p>

      <table class="vaccination-table">
        <thead>
          <tr>
            <th>Vaccine Name</th>
            <th>Date Administered</th>
            <th>Healthcare Provider</th>
            <th>Next Due Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $vaccineInfo = [
            'COVID-19' => ['Quezon City Health Center', '2024-03-15', '2025-03-15'],
            'Influenza' => ['District II Health Center', '2023-10-10', '2024-10-10'],
            'Hepatitis B' => ['Quezon City General Hospital', '2023-01-20', 'Lifetime Protection'],
            'Tetanus' => ['District IV Health Center', '2022-06-05', '2032-06-05'],
            'MMR' => ['Specialty Clinic', '2021-02-14', 'Lifetime Protection'],
            'Pneumonia' => ['Health Center', '2023-05-01', '2033-05-01'],
          ];

          foreach ($vaccines as $vaccine) {
            $name = htmlspecialchars($vaccine);
            $provider = $vaccineInfo[$name][0] ?? 'Unknown Provider';
            $adminDate = $vaccineInfo[$name][1] ?? 'Unknown';
            $dueDate = $vaccineInfo[$name][2] ?? 'Unknown';
            $status = ($dueDate === 'Lifetime Protection' || strtotime($dueDate) > time()) ? 'completed' : 'overdue';
            $action = ($status === 'completed') ? 'View Record' : 'Schedule Now';
            $statusLabel = ucfirst($status);
            echo "
              <tr>
                <td>$name</td>
                <td>" . (strtotime($adminDate) ? date('F j, Y', strtotime($adminDate)) : $adminDate) . "</td>
                <td>$provider</td>
                <td>$dueDate</td>
                <td><span class='vaccination-status $status'>$statusLabel</span></td>
                <td><button class='vaccination-action-button'>$action</button></td>
              </tr>
            ";
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>

  <footer class="vaccination-tracker-footer">
    <p>For questions about your vaccination records or to schedule an appointment, contact your healthcare provider or visit our <a href="book-appointment.php" style="color: #A52A2A; text-decoration: none;">appointment booking page</a>.</p>
  </footer>

  <script>
    function toggleDropdown() {
      const dropdown = document.getElementById('locationDropdown');
      const button = document.querySelector('.dropdown-button');
      const isExpanded = button.getAttribute('aria-expanded') === 'true';

      if (isExpanded) {
        dropdown.classList.remove('show');
        button.setAttribute('aria-expanded', 'false');
      } else {
        dropdown.classList.add('show');
        button.setAttribute('aria-expanded', 'true');
      }
    }

    window.addEventListener('click', function(event) {
      if (!event.target.matches('.dropdown-button') && 
          !event.target.matches('.text-wrapper-2') && 
          !event.target.matches('.ri-arrow-down-s-line')) {
        const dropdown = document.getElementById('locationDropdown');
        const button = document.querySelector('.dropdown-button');
        dropdown.classList.remove('show');
        button.setAttribute('aria-expanded', 'false');
      }
    });

    document.addEventListener('keydown', function(event) {
      const dropdown = document.getElementById('locationDropdown');
      const button = document.querySelector('.dropdown-button');
      if (event.key === 'Escape' && dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
        button.setAttribute('aria-expanded', 'false');
        button.focus();
      }
    });
  </script>

</body>
</html>
