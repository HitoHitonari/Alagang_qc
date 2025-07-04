<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="appointment-styles.css" />
    <title>Book an Appointment - Alagang Bayan</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
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

    <div class="login-style-container">
      <div class="appointment-card">
        <div class="appointment-header">
          <h2 class="appointment-title">Book an Appointment</h2>
          <p class="appointment-subtitle">Schedule your visit with our healthcare professionals</p>
        </div>

        <form class="appointment-form" id="appointmentForm" onsubmit="handleAppointmentSubmit(event)">
          <div class="form-group">
            <label for="fullName" class="form-label">Full Name</label>
            <input 
              type="text" 
              id="fullName" 
              name="fullName" 
              class="form-input" 
              required 
              placeholder="Enter your full name"
            />
          </div>

          <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              class="form-input" 
              required 
              placeholder="Enter your email address"
            />
          </div>

          <div class="form-group">
            <label for="phone" class="form-label">Phone Number</label>
            <input 
              type="tel" 
              id="phone" 
              name="phone" 
              class="form-input" 
              required 
              placeholder="Enter your phone number"
            />
          </div>

          <div class="form-row">
            <div class="form-group form-half">
              <label for="appointmentDate" class="form-label">Preferred Date</label>
              <input 
                type="date" 
                id="appointmentDate" 
                name="appointmentDate" 
                class="form-input date-input" 
                required 
                min=""
              />
            </div>

            <div class="form-group form-half">
              <label for="appointmentTime" class="form-label">Preferred Time</label>
              <select id="appointmentTime" name="appointmentTime" class="form-input" required>
                <option value="">Select time</option>
                <option value="08:00">8:00 AM</option>
                <option value="09:00">9:00 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="13:00">1:00 PM</option>
                <option value="14:00">2:00 PM</option>
                <option value="15:00">3:00 PM</option>
                <option value="16:00">4:00 PM</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="medicalCenter" class="form-label">Medical Center Branch</label>
            <select id="medicalCenter" name="medicalCenter" class="form-input" required>
              <option value="">Select a medical center</option>
              <option value="district-1-center">District I Health Center</option>
              <option value="district-2-center">District II Health Center</option>
              <option value="district-3-center">District III Health Center</option>
              <option value="district-4-center">District IV Health Center</option>
              <option value="district-5-center">District V Health Center</option>
              <option value="district-6-center">District VI Health Center</option>
              <option value="main-hospital">Quezon City General Hospital</option>
              <option value="specialty-clinic">Specialty Clinic</option>
            </select>
          </div>

          <div class="form-group">
            <label for="serviceType" class="form-label">Service Type</label>
            <select id="serviceType" name="serviceType" class="form-input" required>
              <option value="">Select a service</option>
              <option value="vaccination">Vaccination</option>
              <option value="consultation">General Consultation</option>
              <option value="checkup">Health Checkup</option>
              <option value="chat-consultation">Chat-based Consultation</option>
              <option value="emergency">Emergency Care</option>
              <option value="specialist">Specialist Consultation</option>
            </select>
          </div>

          <div class="form-group">
            <label for="notes" class="form-label">Additional Notes (Optional)</label>
            <textarea 
              id="notes" 
              name="notes" 
              class="form-input form-textarea" 
              rows="3" 
              placeholder="Any additional information or special requests"
            ></textarea>
          </div>

          <button type="submit" class="login-style-button">
            Book an Appointment
          </button>
        </form>

        <div class="form-footer">
          <p class="form-footer-text">
            Need help? <a href="#" class="form-link">Contact Support</a>
          </p>
        </div>
      </div>
    </div>

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

    <script>
      // Set minimum date to today
      document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('appointmentDate');
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
      });

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

      window.addEventListener('click', function (event) {
        if (!event.target.matches('.dropdown-button') &&
          !event.target.matches('.text-wrapper-2') &&
          !event.target.matches('.ri-arrow-down-s-line')) {
          const dropdown = document.getElementById('locationDropdown');
          const button = document.querySelector('.dropdown-button');
          dropdown.classList.remove('show');
          button.setAttribute('aria-expanded', 'false');
        }
      });

      document.addEventListener('keydown', function (event) {
        const dropdown = document.getElementById('locationDropdown');
        const button = document.querySelector('.dropdown-button');
        if (event.key === 'Escape' && dropdown.classList.contains('show')) {
          dropdown.classList.remove('show');
          button.setAttribute('aria-expanded', 'false');
          button.focus();
        }
      });

      function handleAppointmentSubmit(event) {
        event.preventDefault();

        const formData = new FormData(event.target);
        const appointmentData = {
          fullName: formData.get('fullName'),
          email: formData.get('email'),
          phone: formData.get('phone'),
          medicalCenter: formData.get('medicalCenter'),
          date: formData.get('appointmentDate'),
          time: formData.get('appointmentTime'),
          serviceType: formData.get('serviceType'),
          notes: formData.get('notes')
        };

        console.log('Appointment Data:', appointmentData);

        Swal.fire({
          title: 'Appointment Booked!',
          text: 'Your appointment has been successfully submitted. We will contact you shortly to confirm.',
          icon: 'success',
          confirmButtonText: 'OK'
        }).then(() => {
          event.target.reset();
          // Optional: redirect
          // window.location.href = 'appointment-confirmation.php';
        });
      }
    </script>

  </body>
</html>
