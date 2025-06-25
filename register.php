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

$fullname = $_POST['fullname'];
$email = $_POST['emailaddress'];
$pass = md5($_POST['password']);

// ✅ STEP 1: Check if email already exists
$check = $conn->prepare("SELECT id FROM login WHERE emailaddress = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
  echo "<script>
    alert('This email is already registered. Please use a different one.');
    window.location.href = 'register.html';
  </script>";
  exit;
}

// ✅ STEP 2: Insert new user
$sql = $conn->prepare("INSERT INTO login (fullname, emailaddress, password) VALUES (?, ?, ?)");
$sql->bind_param("sss", $fullname, $email, $pass);

if ($sql->execute()) {
  $_SESSION['emailaddress'] = $email;
  $_SESSION['fullname'] = $fullname;

  // ✅ SweetAlert popup after successful insert
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
  <script>
  Swal.fire({
    title: 'Complete Your Profile',
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
      <div class="swal2-form-row"><label for="swal-first">First Name</label><input id="swal-first" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-last">Last Name</label><input id="swal-last" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-phone">Phone</label><input id="swal-phone" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-gender">Gender</label>
        <select id="swal-gender" class="swal2-select">
          <option>Male</option><option>Female</option><option>Other</option>
        </select>
      </div>
      <div class="swal2-form-row"><label for="swal-age">Age</label><input id="swal-age" type="number" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-dob">Date of Birth</label><input id="swal-dob" type="date" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-street">Street</label><input id="swal-street" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-postal">Postal Code</label><input id="swal-postal" class="swal2-input"></div>
      <div class="swal2-form-row"><label for="swal-district">District</label>
        <select id="swal-district" class="swal2-select">
          <option>District I</option><option>District II</option><option>District III</option>
          <option>District IV</option><option>District V</option><option>District VI</option>
        </select>
      </div>
      <div class="swal2-form-row"><label for="swal-barangay">Barangay</label><input id="swal-barangay" class="swal2-input"></div>
    `,
    showCancelButton: true,
    confirmButtonText: 'Submit',
    focusConfirm: false,
    preConfirm: () => {
      return {
        firstName: document.getElementById('swal-first').value,
        lastName: document.getElementById('swal-last').value,
        phone: document.getElementById('swal-phone').value,
        gender: document.getElementById('swal-gender').value,
        age: document.getElementById('swal-age').value,
        dob: document.getElementById('swal-dob').value,
        street: document.getElementById('swal-street').value,
        postal: document.getElementById('swal-postal').value,
        district: document.getElementById('swal-district').value,
        barangay: document.getElementById('swal-barangay').value
      };
    }
  }).then((result) => {
    if (result.isConfirmed) {
      fetch('save_info.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ 
          ...result.value, 
          email: "<?php echo htmlspecialchars($email); ?>"
        })
      })
      .then(res => res.text())
      .then(data => {
        if (data === 'success') {
          Swal.fire('Saved!', 'Your information has been updated.', 'success')
            .then(() => window.location.href = 'loggedin.php');
        } else {
          Swal.fire('Error', data, 'error');
        }
      });
    }
  });
  </script>
  </body>
  </html>
  <?php

} else {
  echo "Registration failed: " . $conn->error;
}

$conn->close();
?>
