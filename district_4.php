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
    
    <section class="district-section">
      <div class="district-text">
        <h1 class="district-title">District IV</h1>
        <h2 class="district-subheading">Advancing Public Health in the Heart of Quezon City</h2>
        <p class="district-description">
          In response to rising health concerns, particularly in disease prevention, District 4 has implemented a variety of proactive measures. From mobile vaccination units that provide essential immunizations to Super Health Centers offering free medical consultations and medicines, the district is committed to addressing the needs of its residents.
          The district also prioritizes wellness programs, such as physical fitness activities and mental health support, designed to foster a healthier community. By investing in health care infrastructure and empowering local health workers, District 4 is creating a model for sustainable health practices in urban areas.
        </p>
      </div>
      <img src="./imgs/district_4.jpg" alt="District IV Image" class="district-image" />
    </section>

    <section class="health-services-section">
      <h2 class="health-services-title">Health Services Information</h2>
      <h3 class="health-services-subheading">List of centers and hospitals:</h3>
      <div class="health-services-details">
        <ul>
            <li>Bernardo Health Center - <a href="https://maps.app.goo.gl/Z6PvLJefNZjFNv5G7" target="_blank">95 Ermin Garcia Street, Brgy. Pinagkaisahan</a><br>
            <a href="tel:+6372949412">7294 9412</a> | <a href="mailto:bernardohc.cityhealth@quezoncity.gov.ph">bernardohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+John+Christian+M+Mirasol" target="_blank">Dr. John Christian M. Mirasol</a></li>

            <li>Cubao Health Center - <a href="https://maps.app.goo.gl/9Ha6Fb2kGEJjevhW8" target="_blank">22 Mayor Ignacio Diaz Street, Brgy. Kaunlaran</a><br>
            <a href="tel:+639454876807">09454876807</a> | <a href="mailto:cubaohc.cityhealth@quezoncity.gov.ph">cubaohc.cityhealth@quezoncity.gov.ph</a></li>

            <li>Galas Health Center - <a href="https://maps.app.goo.gl/QmZJdeYXHjuSsAom7" target="_blank">46 Bayani Street, Brgy. San Isidro Labrador, Galas</a><br>
            <a href="tel:+6370056597">7005 6597</a> | <a href="mailto:galashc.cityhealth@quezoncity.gov.ph">galashc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Angelica+Joel+M+Yumol" target="_blank">Dr. Angelica Joel M. Yumol</a></li>

            <li>Kalayaan Health Center - <a href="https://maps.app.goo.gl/VMsN3JFxG6fNJ7fu9" target="_blank">91 Guirayan Street, Brgy. Doña Imelda</a><br>
            <a href="tel:+6385673355">8567 3355</a> | <a href="mailto:kalayaanhc.cityhealth@quezoncity.gov.ph">kalayaanhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Darlene+Pearl+L+Superable" target="_blank">Dr. Darlene Pearl L. Superable</a></li>

            <li>Kamuning Super Health Center - <a href="https://maps.app.goo.gl/JgELgV5RWnLPDSEs9" target="_blank">2nd flr. 19 T. Gener Street cor. K-15th Street, Brgy. Kamuning</a><br>
            <a href="tel:+6370928594">7092 8594</a> | <a href="mailto:kamuninghc.cityhealth@quezoncity.gov.ph">kamuninghc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Rochel+Mae+L+Detera" target="_blank">Dr. Rochell-Mae L. Detera</a></li>

            <li>Krus na Ligas Health Center - <a href="https://maps.app.goo.gl/2X9qeqWJxvs4oHZm8" target="_blank">89 Lt. J. Francisco, Brgy. Krus na Ligas</a><br>
            <a href="tel:+639195586190">09195586190</a> | <a href="mailto:krusnaligashc.cityhealth@quezoncity.gov.ph">krusnaligashc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Cydrick+Y+Masangya" target="_blank">Dr. Cydrick Y. Masangya</a>/<a href="https://www.google.com/search?q=Dr+Montana+Amir+C+Dominguez+Agudelo" target="_blank">Dr. Montana Amir C. Dominguez-Agudelo</a></li>

            <li>Pinyahan Health Center - <a href="https://maps.app.goo.gl/aPmMipkH1UHVWJaR6" target="_blank">37 Malakas Street, Brgy. Pinyahan</a><br>
            <a href="tel:+6373931812">7393 1812</a>/<a href="tel:+6379439106">7943 9106</a> | <a href="mailto:pinyahanhc.cityhealth@quezoncity.gov.ph">pinyahanhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Marlon+Joselito+Roberto+F+Molano" target="_blank">Dr. Marlon Joselito Roberto F. Molano</a></li>

            <li>General Roxas Health Center - <a href="https://maps.app.goo.gl/fXnyjvZTED3gMETu7" target="_blank">Madre Silva, Roxas, Roxas District, 1103 Quezon City</a></li>

            <li>San Vicente Health Center - <a href="https://maps.app.goo.gl/622Cvopd9u9nEuj69" target="_blank">14 Maayusin Ext., Brgy. San Vicente</a><br>
            <a href="tel:+6370058894">7005 8894</a> | <a href="mailto:sanvicentehc.cityhealth@quezoncity.gov.ph">sanvicentehc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Dane+Michael+S+Calica" target="_blank">Dr. Dane Michael S. Calica</a></li>

            <li>Tatalon Health Center - <a href="https://maps.app.goo.gl/DFzE7paPzcMXs8ZN8" target="_blank">33 Victory Avenue, Brgy. Tatalon</a><br>
            <a href="tel:+6371212955">7121 2955</a> | <a href="mailto:tatalonhc.cityhealth@quezoncity.gov.ph">tatalonhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Eyrene+V+Amoranto" target="_blank">Dr. Eyrene V. Amoranto</a></li>
        </ul>
      </div>
    </section>

    <section class="vaccination-drives-section">
      <h3 class="vaccination-drives-heading">Upcoming vaccination drives:</h3>
      <p class="vaccination-drives-text">
        None. For updates on upcoming vaccination drives or special immunization campaigns, you can regularly check this website or follow us on our official social media accounts.
      </p>
    </section>

    <section class="health-information-section">
  <div class="health-info-subsection">
    <h3 class="health-info-heading">Recent Health Alerts: as of April 28, 2025</h3>
    <p class="health-info-subheading">Barangays: New Manila, Horseshoe, Mariana, etc.</p>
    <div class="health-info-text">
      <ul>
        <li>Air Quality Alert: Not explicitly mentioned--possible minor impact, but no confirmed health alert.</li>
        <li>Dengue Alert: Likely affected as part of general outbreak.</li>
      </ul>
    </div>
  </div>

  <div class="health-info-subsection">
    <h3 class="health-info-heading">Health Statistics</h3>
    <div class="health-info-text">
      <ul>
        <li>Dengue Cases.</li>
        <li>Pertussis Cases.</li>
      </ul>
    </div>
  </div>

  <div class="health-info-subsection">
    <h3 class="health-info-heading">Health Programs & Initiatives</h3>
    <div class="health-info-text">
      <ul>
        <li>Health and Wellness Programs</li>
        <li>Child and Maternal Health Initiatives</li>
        <li>Super Health Centers</li>
      </ul>
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
