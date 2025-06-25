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

// Fetch all emails for dropdown
$accounts = [];
$emailQuery = "SELECT email FROM infos";
$emailResult = $conn->query($emailQuery);
if ($emailResult->num_rows > 0) {
  while ($row = $emailResult->fetch_assoc()) {
    $accounts[] = $row['email'];
  }
}

// Determine selected email
$selectedEmail = isset($_GET['selected_email']) ? $_GET['selected_email'] : $_SESSION['emailaddress'];

// Fetch user info
$user = null;
$stmt = $conn->prepare("SELECT * FROM infos WHERE email = ?");
$stmt->bind_param("s", $selectedEmail);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Fetch vaccination data
// Fetch vaccination data from `vaccinations` table
$vaccines = [];
$stmt2 = $conn->prepare("SELECT vaccine_name, date_administered, provider, next_due_date FROM vaccinations WHERE email = ?");
$stmt2->bind_param("s", $selectedEmail);
$stmt2->execute();
$result2 = $stmt2->get_result();
while ($row = $result2->fetch_assoc()) {
  $vaccines[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile - Alagang Bayan</title>
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="account-picker.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head> 
<body>
  <!-- HEADER -->
  <div class="HEADER">
    <header class="header">
      <div class="frame">
        <div class="LOGO"></div>
        <div class="profile-section">
            <a href="#" onclick="logoutConfirmation(event)" class="header-appointment-button">LOGOUT</a>

          </div>
      </div>
      <div class="div">
        <div class="TEXT-HOVER">

        </div>
        <div class="TEXT-HOVER">

        </div>
        <div class="TEXT-HOVER">

        </div>
        <div class="LOCATION-DROPDOWN">

          </button>
          <div class="dropdown-menu" id="locationDropdown">

          </div>
        </div>
      </div>
    </header>
  </div>
  
  <main style="padding: 145px;">
    <h1>ADMIN DASHBOARD</h1>
    <h2>Select an Account</h2>
    <form method="GET" id="accountPickerForm">
      <select name="selected_email" onchange="document.getElementById('accountPickerForm').submit()">
        <option value="">-- Select an account --</option>
        <?php foreach ($accounts as $accEmail): ?>
          <option value="<?php echo $accEmail; ?>" <?php if ($selectedEmail === $accEmail) echo 'selected'; ?>>
            <?php echo $accEmail; ?>
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

      <section style="margin-top: 60px;">
        <h2>Vaccination Tracker</h2>
        <p>Below is a record of the vaccinations.</p>

        <form method="POST" action="update_vaccinations.php">
  <input type="hidden" name="email" value="<?= $selectedEmail ?>">
  <table class="vaccination-table">
    <thead>
      <tr>
        <th>Vaccine Name</th>
        <th>Date Administered</th>
        <th>Healthcare Provider</th>
        <th>Next Due Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vaccines as $i => $vaccine): ?>
        <tr>
          <td>
  <input type="text" name="vaccines[<?= $i ?>][name]" value="<?= htmlspecialchars($vaccine['vaccine_name']) ?>" readonly>
</td>

</select>
    </td>
    <td><input type="date" name="vaccines[<?= $i ?>][date_administered]" value="<?= htmlspecialchars($vaccine['date_administered']) ?>"></td>
    <td><input name="vaccines[<?= $i ?>][provider]" value="<?= htmlspecialchars($vaccine['provider']) ?>"></td>
    <td><input type="date" name="vaccines[<?= $i ?>][due_date]" value="<?= htmlspecialchars($vaccine['next_due_date']) ?>"></td>
    <td><button type="button" onclick="this.closest('tr').remove()">Delete</button></td>
  </tr>
<?php endforeach; ?>
      <tr>
        <td><select name="vaccines[new][name]">
  <option value="">-- Select Vaccine --</option>
  <option value="COVID-19">COVID-19</option>
  <option value="Influenza (Flu)">Influenza (Flu)</option>
  <option value="Hepatitis B">Hepatitis B</option>
  <option value="Tetanus">Tetanus</option>
  <option value="MMR (Measles, Mumps, Rubella)">MMR (Measles, Mumps, Rubella)</option>
  <option value="Pneumonia">Pneumonia</option>
</select>
</td>
        <td><input type="date" name="vaccines[new][date_administered]"></td>
        <td><input name="vaccines[new][provider]" placeholder="Provider"></td>
        <td><input type="date" name="vaccines[new][due_date]"></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <button type="submit">Save Changes</button>
</form>

      </section>
    <?php else: ?>
      <p>No data found for this user.</p>
    <?php endif; ?>
  </main>
  <script>
  function logoutConfirmation(event) {
    event.preventDefault(); // Prevent default link action

    Swal.fire({
      title: 'Are you sure you want to log out?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, log me out',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to logout script or homepage
        window.location.href = 'logout.php'; // ← Create this if you want to destroy session
      }
    });
  }
</script>

</body>
</html>
