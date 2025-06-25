<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles.css">
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
    
    <section class="registration-section">
  <div class="registration-content">
    <div class="left-column">
      <h1 class="main-heading">MABUHAY!</h1>
      <p class="welcome-text">
        Welcome to Alagang Bayan, your digital health partner in Quezon City. Share your feedback to help us improve your healthcare experience.
      </p>
    </div>
    
    <div class="right-column">
      <div class="feedback-form-container">
        <h1 class="feedback-form-title">FEEDBACK FORM</h1>
        <form class="feedback-form">
          <label for="first-name">First name</label>
          <input type="text" id="first-name" name="first-name" placeholder="Alagang" required>

          <label for="last-name">Last name</label>
          <input type="text" id="last-name" name="last-name" placeholder="Bayan" required>

          <label for="email">Email address</label>
          <input type="email" id="email" name="email" placeholder="alagangbayan.qc.ph@email.com" required>

          <label for="message">Your message</label>
          <textarea id="message" name="message" rows="4" placeholder="Enter your question or message" required></textarea>

          <button type="submit">Submit</button>
        </form>
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
              <li><a href="#" class="footer-support-link">Feedback Form</a></li>
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