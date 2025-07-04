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
        <h1 class="district-title">District V</h1>
        <h2 class="district-subheading">United for a Healthier Community</h2>
        <p class="district-description">
          The district expanded its healthcare offerings with modernized Super Health Centers, which provide essential services like maternal care, vaccinations, and chronic disease management.
          Community wellness initiatives, including fitness programs and mental health support services, further enhance the district’s efforts to ensure that every resident has the opportunity to live a healthy and fulfilling life.
        </p>
      </div>
      <img src="./imgs/district_5.jpg" alt="District V Image" class="district-image" />
    </section>

    <section class="health-services-section">
      <h2 class="health-services-title">Health Services Information</h2>
      <h3 class="health-services-subheading">List of centers and hospitals:</h3>
      <div class="health-services-details">
        <ul>
            <li>Arsenia J. Maximo Super Health Center - <a href="https://maps.app.goo.gl/TwJMFRxMwqPy2nbQ9" target="_blank">Quirino Hwy., Brgy. Novaliches Proper</a><br>
            <a href="tel:+6370047692">7004 7692</a> | <a href="mailto:ajmaximoshc.cityhealth@quezoncity.gov.ph">ajmaximoshc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Leafar+Marie+SF+Acorda" target="_blank">Dr. Leafar Marie SF. Acorda</a>/<a href="https://www.google.com/search?q=Dr+Errolyn+Nerisse+R+Santos" target="_blank">Dr. Errolyn Nerisse R. Santos</a></li>

            <li>Bagbag Health Center - <a href="https://maps.app.goo.gl/7hcDagoNJ8t69yAL6" target="_blank">18 Parokya ng Pagkabuhay Road, Brgy. Bagbag</a><br>
            <a href="tel:+6371484924">7148 4924</a> | <a href="mailto:bagbaghc.cityhealth@quezoncity.gov.ph">bagbaghc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Jorja+Maria+L+Almendrala+Molina" target="_blank">Dr. Jorja Maria L. Almendrala-Molina</a></li>

            <li>Capri Health Center - <a href="https://maps.app.goo.gl/VGnwjcfJ9fgNivyy9" target="_blank">Narra Street Area 5, Brgy. Capri, Novaliches</a><br>
            <a href="tel:+6387115952">8711 5952</a> | <a href="mailto:caprihealthcenter2023@gmail.com">caprihealthcenter2023@gmail.com</a> | <a href="https://www.google.com/search?q=Dr+Charlene+G+Deuna" target="_blank">Dr. Charlene G. Deuna</a></li>

            <li>Delos Santos Medical Center - <a href="https://maps.app.goo.gl/9YZQAjZjaDY7LCqDA" target="_blank">E. Rodriguez Sr. Ave., Quezon City</a></li>

            <li>Fairview Health Center - <a href="https://maps.app.goo.gl/SnBT8VUvbjxGVj8Q7" target="_blank">Dahlia Avenue, Brgy. Fairview</a><br>
            <a href="tel:+6371494641">7149 4641</a> | <a href="mailto:fairviewhc.cityhealth@quezoncity.gov.ph">fairviewhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Maria+Mae+Quinser+C+Vargas" target="_blank">Dr. Maria Mae Quinser C. Vargas</a></li>

            <li>FEU-NRMF Medical Center - <a href="https://maps.app.goo.gl/ifUqsSVZgGgm4BWv8" target="_blank">Nicanor Reyes Medical Foundation, Quezon City</a></li>

            <li>Greater Lagro Health Center - <a href="https://maps.app.goo.gl/KZnaC5C9iTCWKwrc6" target="_blank">Blk 47 Lot 1c, Ascension Avenue, Brgy. Greater Lagro</a><br>
            <a href="tel:+6370014728">7001 4728</a> | <a href="mailto:greaterlagrohc.cityhealth@quezoncity.gov.ph">greaterlagrohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Gloria+T+Facun" target="_blank">Dr. Gloria T. Facun</a></li>

            <li>Gulod Health Center - <a href="https://maps.app.goo.gl/cfMQjwzrnVYbpL9z7" target="_blank">47 Villaflor Village, Brgy. Gulod</a><br>
            <a href="tel:+6370029258">7002 9258</a> | <a href="mailto:gulodhc.cityhealth@quezoncity.gov.ph">gulodhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Patricia+Anne+P+Bonifacio" target="_blank">Dr. Patricia Anne P. Bonifacio</a></li>

            <li>Kaligayahan Health Center - <a href="https://maps.app.goo.gl/MmGVhSG5jMfA2zcs9" target="_blank">58 Kingfisher Street, Zabarte Subd., Brgy. Kaligayahan</a><br>
            <a href="tel:+6371484934">7148 4934</a>/<a href="tel:+639631541440">09631541440</a> | <a href="mailto:kaligayahanhc.cityhealth@quezoncity.gov.ph">kaligayahanhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Raquel+Anne+A+Yangkong" target="_blank">Dr. Raquel Anne A. Yangkong</a></li>

            <li>Maligaya Health Center - <a href="https://maps.app.goo.gl/ff5JUcpnzfeWuswz5" target="_blank">Pechayan Street, Maligaya Park Subd., Brgy. Pasong Putik</a><br>
            <a href="tel:+63864922631">8 6492 2631</a> | <a href="mailto:maligayahc.cityhealth@quezoncity.gov.ph">maligayahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Ferdinand+T+Agustin" target="_blank">Dr. Ferdinand T. Agustin</a></li>

            <li>Nagkaisang Nayon Health Center - <a href="https://maps.app.goo.gl/L2DD5TYjcm5RZW8FA" target="_blank">Terio Street, FB de Jesus, Sitio Daming Maliit, Brgy. Nagkaisang Nayon</a><br>
            <a href="tel:+6371484964">7148 4964</a> | <a href="mailto:nagkaisangnayonhc.cityhealth@quezoncity.gov.ph">nagkaisangnayonhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Josefa+R+Abainza" target="_blank">Dr. Josefa R. Abainza</a>/<a href="https://www.google.com/search?q=Dr+Alvie+R+Dela+Torre" target="_blank">Dr. Alvie R. Dela Torre</a> (MWF)</li>

            <li>National Children’s Hospital - <a href="https://maps.app.goo.gl/qtUg8NehHBa6UQf68" target="_blank">264 E Rodriguez Sr. Ave, Quezon City</a></li>

            <li>North Fairview Health Center - <a href="https://maps.app.goo.gl/U6p87Tba3V6WRdh77" target="_blank">Avon Street, North Fairview Park Subd., Brgy. North Fairview</a><br>
            <a href="tel:+6370037839">7003 7839</a> | <a href="mailto:northfairviewhc.cityhealth@quezoncity.gov.ph">northfairviewhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Aaron+L+Palting" target="_blank">Dr. Aaron L. Palting</a></li>

            <li>Sta. Lucia Super Health Center - <a href="https://maps.app.goo.gl/Qed4H826GvSf8JPP6" target="_blank">Sta. Lucia Avenue, Brgy. Sta. Lucia</a><br>
            <a href="tel:+6370037431">7003 7431</a> | <a href="mailto:staluciashc.cityhealth@quezoncity.gov.ph">staluciashc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Joyce+Anne+M+Lima" target="_blank">Dr. Joyce Anne M. Lima</a></li>

            <li>St. Luke’s Medical Center - <a href="https://maps.app.goo.gl/fgK6CcpEBGQTf3TA7" target="_blank">279 E Rodriguez Sr. Ave, Quezon City</a><br>
            <a href="tel:+63287230101">(02) 8723 0101</a> | <a href="https://stlukes.com.ph" target="_blank">stlukes.com.ph</a></li>
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
    <p class="health-info-subheading">Barangays: Fairview, Greater Lagro, Gulod, etc.</p>
    <div class="health-info-text">
      <ul>
        <li>Air Quality Alert: Not directly mentioned--likely minor or no impact.</li>
        <li>Dengue Alert: Included among affected areas during outbreak.</li>
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
        <li>Mobile Vaccination Drives</li>
        <li>Super Health Centers</li>
        <li>Community Health Education</li>
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
