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
        <h1 class="district-title">District VI</h1>
        <h2 class="district-subheading">Enhancing Health Services</h2>
        <p class="district-description">
          The district has prioritized the establishment of Super Health Centers in key barangays, which provide a wide range of services including outpatient care, specialized consultations, and preventive care programs. Mobile health units are also deployed to ensure that healthcare reaches even the most remote areas of the district.
          District 6 is also tackling public health issues such as dengue and respiratory diseases with ongoing prevention programs and public health campaigns. By strengthening healthcare infrastructure and fostering partnerships with local health workers, District 6 is enhancing its capacity to provide high-quality health services to its residents.
        </p>
      </div>
      <img src="./imgs/district_6.jpg" alt="District VI Image" class="district-image" />
    </section>

    <section class="health-services-section">
      <h2 class="health-services-title">Health Services Information</h2>
      <h3 class="health-services-subheading">List of centers and hospitals:</h3>
      <div class="health-services-details">
        <ul>
            <li><a href="https://www.facebook.com/brgy.apoloniosamson" target="_blank">Apolonio Samson Health Center</a> - <a href="https://maps.app.goo.gl/2K8TCin6EJbx2sLKA" target="_blank">150 Kaingin Road, Kaingin, Brgy. Apolonio Samson</a><br>
            <a href="tel:+639687096694">09687096694</a> | <a href="mailto:ASamsonHC.CityHealth@quezoncity.gov.ph">ASamsonHC.CityHealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Hanniel+Luis+C+Aberin" target="_blank">Dr. Hanniel Luis C. Aberin</a></li>

            <li>Baesa Health Center - <a href="https://maps.app.goo.gl/dsuCWdQ3n4fpgzqD9" target="_blank">57 Baesa Road, Brgy. Baesa</a><br>
            <a href="tel:+6371484458">7148 4458</a> | <a href="mailto:baesahc.cityhealth@quezoncity.gov.ph">baesahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Yanis+A+Santiago" target="_blank">Dr. Yanis A. Santiago</a></li>

            <li>Banlat Health Center - <a href="https://maps.app.goo.gl/m7oX2SmMK3QXMcQJA" target="_blank">13 Daffodil St. cor. Daisy St. Del Nacia 1 Village, Brgy. Tandang Sora</a><br>
            <a href="tel:+6370032412">7003 2412</a> | <a href="mailto:banlathc.cityhealth@quezoncity.gov.ph">banlathc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Margie+U+Ibañez" target="_blank">Dr. Margie U. Ibañez</a></li>

            <li>Melchora Aquino Health Center - <a href="https://maps.app.goo.gl/mQW2BSk6a46ahqAF7" target="_blank">Loboc St., Napocor Village, Brgy. Tandang Sora</a><br>
            <a href="tel:+6387116016">8711 6016</a> | <a href="mailto:maquinohc.cityhealth@quezoncity.gov.ph">maquinohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Revelation+E+Pillien" target="_blank">Dr. Revelation E. Pillien</a></li>

            <li>M.H. Pedro Health Center - <a href="https://maps.app.goo.gl/VQBYtnPkuBPi2m976" target="_blank">13 J.P. Eugenio St., Philand Subd., Brgy. Pasong Tamo</a><br>
            <a href="tel:+639254891619">09254891619</a> | <a href="mailto:mhpedrohc.cityhealth@quezoncity.gov.ph">mhpedrohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Zaira+V+Santos" target="_blank">Dr. Zaira V. Santos</a>/<a href="https://www.google.com/search?q=Dr+John+Eric+Sagun" target="_blank">Dr. John Eric Sagun</a></li>

            <li>Sangandaan Health Center - <a href="https://maps.app.goo.gl/xzHonrLqyKhmm32k6" target="_blank">Premium Street, Brgy. Sangandaan</a><br>
            <a href="tel:+6371196312">7119 6312</a> | <a href="mailto:sangandaanhc.cityhealth@quezoncity.gov.ph">sangandaanhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Patricia+Aryan+A+Nailes" target="_blank">Dr. Patricia Aryan A. Nailes</a></li>

            <li>Sauyo Health Center - <a href="https://maps.app.goo.gl/tAwQsPAyaQ9orRLy7" target="_blank">Greenville Drive, Brgy. Sauyo</a><br>
            <a href="tel:+639618495092">09618495092</a> | <a href="mailto:sauyohc.cityhealth@quezoncity.gov.ph">sauyohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Jemellee+F+Ricafranca" target="_blank">Dr. Jemellee F. Ricafranca</a></li>

            <li>Tandang Sora Health Center - <a href="https://maps.app.goo.gl/pGd8qs55hmjBCoZM9" target="_blank">506 Quirino Hwy., Talipapa People Civic Center, Brgy. Talipapa</a><br>
            <a href="tel:+639600245760">09600245760</a> | <a href="mailto:tandangsorahc.cityhealth@quezoncity.gov.ph">tandangsorahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Kristoffer+Rundstedt+DL+Domingo" target="_blank">Dr. Kristoffer Rundstedt DL. Domingo</a></li>

            <li>Wenceslao Dela Paz Health Center - <a href="https://maps.app.goo.gl/kSyW3S2Cz75DjjxD7" target="_blank">Sta. Felicia Street, San Antonio Homes</a><br>
            <a href="tel:+6371492372">7149 2372</a> | <a href="mailto:culiathc.cityhealth@quezoncity.gov.ph">culiathc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Rica+Fatima+Charlene+E+Arias" target="_blank">Dr. Rica Fatima Charlene E. Arias</a></li>
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
    <p class="health-info-subheading">Barangays: Baesa, Apolonio Samson, Balon Bato, etc.</p>
    <div class="health-info-text">
      <ul>
        <li>Air Quality Alert: P. Dela Cruz and nearby areas experienced “unhealthy” air quality.</li>
        <li>Dengue Alert: May have had cases during outbreak. No specific barangays.</li>
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
        <li>Super Health Centers</li>
        <li>Dengue Control Measures</li>
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
