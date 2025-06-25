<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
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
    
<div class="about-us-section">
        <h2 class="about-us-title">ABOUT US</h2>
        <div class="about-us-grid">
          <div class="about-us-column">
            <div class="about-us-image">
              <img src="./imgs/qc_city_hall.png" alt="Quezon City Health Center Building" />
            </div>
            <h3 class="column-title">Introduction</h3>
            <p class="column-text">
              Alagang Bayan Quezon City Health Information System is a digital initiative by the Quezon City Government aimed at transforming how health services are delivered and managed across the city.
            </p>
          </div>
          
          <div class="about-us-column">
            <div class="about-us-image">
              <img src="./imgs/edsa_statue.jpg" alt="Quezon City Monument representing healthcare objectives" />
            </div>
            <h3 class="column-title">Key Objectives</h3>
            <p class="column-text">
              Designed with local residents and healthcare workers in mind, the system provides a centralized, secure, and user-friendly platform for managing patient records, scheduling appointments, and tracking vaccinations.
            </p>
          </div>
          
          <div class="about-us-column">
            <div class="about-us-image">
              <img src="./imgs/oblation.jpg" alt="Government building representing security and privacy" />
            </div>
            <h3 class="column-title">Commitment to Privacy & Security</h3>
            <p class="column-text">
              At Alagang Bayan Quezon City Health Information System, we prioritize the privacy and security of your health data. We comply with the Data Privacy Act of 2012 and implement strict safeguards to ensure your information is protected, confidential, and accessed only by authorized personnel.
            </p>
            <p class="column-text-secondary">
              Your trust matters to us—and we're committed to keeping your health information safe at all times.
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
      function scrollServices(direction) {
        const container = document.getElementById('servicesScroll');
        const scrollAmount = 320; // Width of one card plus gap
        
        if (direction === 'left') {
          container.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
          });
        } else {
          container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
          });
        }
      }
      
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
      
      // Close dropdown when clicking outside
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
      
      // Keyboard navigation
      document.addEventListener('keydown', function(event) {
        const dropdown = document.getElementById('locationDropdown');
        const button = document.querySelector('.dropdown-button');
        
        // Close dropdown on Escape key
        if (event.key === 'Escape' && dropdown.classList.contains('show')) {
          dropdown.classList.remove('show');
          button.setAttribute('aria-expanded', 'false');
          button.focus();
        }
      });
    </script>

  </body>
</html>