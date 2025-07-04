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
        <h1 class="district-title">District II</h1>
        <h2 class="district-subheading">Expanding Health Access</h2>
        <p class="district-description">
          District 2 of Quezon City is strategically located at the heart of the city, home to a diverse population with varying healthcare needs. The district continues to focus on strengthening health access, especially for underserved communities.
          In 2024, District 2 focused on expanding healthcare delivery through initiatives such as mobile health clinics and health and wellness caravans. These efforts ensure that residents, especially those in remote areas, have access to essential health services like vaccinations, health check-ups, and education. District 2 also boasts newly established Super Health Centers in barangays, offering a wider range of medical services, including outpatient consultations and free medications.
        </p>
      </div>
      <img src="./imgs/district_2.jpg" alt="District II Image" class="district-image" />
    </section>

    <section class="health-services-section">
      <h2 class="health-services-title">Health Services Information</h2>
      <h3 class="health-services-subheading">List of centers and hospitals:</h3>
      <div class="health-services-details">
        <ul>
            <li>Bagong Silangan Health Center - <a href="https://maps.app.goo.gl/fB6HpbHyopi13UHz5" target="_blank">Bonifacio Street, Brgy. Bagong Silangan</a><br>
            <a href="tel:+6387131918">8713 1918/</a><a href="tel:+639778091108">09778091108</a> | <a href="mailto:bagongsilanganhc.cityhealth@quezoncity.gov.ph">bagongsilanganhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Michael+Jonathan+R+Palad" target="_blank">Dr. Michael Jonathan R. Palad/</a><a href="https://www.google.com/search?q=Dr+Karl+Adrian+Punzalan" target="_blank">Dr. Karl Adrian Punzalan</a></li>

            <li>Batasan Hills Super Health Center - <a href="https://maps.app.goo.gl/7pvoPBNtSdMsoqFj7" target="_blank">2nd flr., IBP Road cor. Commonwealth Avenue</a><br>
            <a href="tel:+639228304110">09228304110</a> | <a href="mailto:batasanhillsshc.cityhealth@quezoncity.gov.ph">batasanhillsshc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Ericka+Joan+R+Nera" target="_blank">Dr. Ericka Joan R. Nera</a></li>

            <li>Betty Go Belmonte Super Health Center - <a href="https://maps.app.goo.gl/6ukLxNQQreD5htnX6" target="_blank">2nd flr. 12 Artillery Road, Brgy. Holy Spirit</a><br>
            <a href="tel:+6371491340">7149 1340/</a><a href="tel:+639161693601">09161693601</a> | <a href="mailto:bgbelmonteshc.cityhealth@quezoncity.gov.ph">bgbelmonteshc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Michelle+G+Sanorjo" target="_blank">Dr. Michelle G. Sanorjo</a></li>

            <li>Commonwealth Health Center - <a href="https://maps.app.goo.gl/f1YpLY3FM8aapjMy9" target="_blank">Katuparan St., Brgy. Commonwealth</a><br>
            <a href="tel:+6387116485">8711 6485/</a><a href="tel:+639228793305">09228793305</a> | <a href="mailto:commonwealthhc.cityhealth@quezoncity.gov.ph">commonwealthhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Joyce+Anne+Mariano" target="_blank">Dr. Joyce Anne Mariano</a></li>

            <li>Lupang Pangako Health Center - <a href="https://maps.app.goo.gl/6hckgoFsss2bphwE8" target="_blank">Phase I, Lupang Pangako, Brgy. Payatas</a><br>
            <a href="tel:+639991094962">09991094962</a> | <a href="mailto:lupangpangakohc.cityhealth@quezoncity.gov.ph">lupangpangakohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Roseanne+Jan+D+Chuca" target="_blank">Dr. Roseanne Jan D. Chuca</a></li>

            <li>National Government Center (NGC) Super Health Center - <a href="https://maps.app.goo.gl/6jERakdd4H7ry8n69" target="_blank">MRB, Phase 1 Pilot Drive, Brgy. Commonwealth</a><br>
            <a href="tel:+639452701256">09452701256/</a><a href="tel:+639778091108">09778091108</a> | <a href="mailto:ngchc.cityhealth@quezoncity.gov.ph">ngchc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Leafar+Marie+Acorda" target="_blank">Dr. Leafar Marie Acorda</a></li>

            <li>Payatas A Health Center - <a href="https://maps.app.goo.gl/MPDQWXoy88fN523e7" target="_blank">Ilang-Ilang Street, Brgy. Payatas</a><br>
            <a href="tel:+63271184392">(02) 7118 4392/</a><a href="tel:+639650376379">09650376379</a> | <a href="mailto:payatasahealthcenter2021@gmail.com">payatasahealthcenter2021@gmail.com</a> | <a href="https://www.google.com/search?q=Dr+Rochell+Mae+L+Detera" target="_blank">Dr. Rochell Mae L. Detera</a></li>

            <li>Payatas B Health Center - <a href="https://maps.app.goo.gl/7DWkQrBUMn6WjzLt9" target="_blank">Bulacan Street, Brgy. Payatas</a><br>
            <a href="tel:+639690394762">09690394762</a> | <a href="mailto:payatasbhc.cityhealth@quezoncity.gov.ph">payatasbhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Joyce+Anne+Mariano" target="_blank">Dr. Joyce Anne Mariano</a></li>

            <li><a href="https://www.facebook.com/pcmcgovph/" target="_blank">Philippine Children’s Medical Center - </a><a href="https://maps.app.goo.gl/DEkMbHJcCpHyTSUY7" target="_blank">Quezon Avenue cor. Sen Miriam Avenue, Bagong Pag-asa, Quezon City</a><br>
            <a href="tel:+63285889900">(02) 8588 9900/</a><a href="tel:+639178356458">09178356458</a> | <a href="https://pcmc.gov.ph" target="_blank">pcmc.gov.ph</a></li>

            <li><a href="https://www.facebook.com/udmc.official/" target="_blank">United Doctors Medical Center - </a><a href="https://maps.app.goo.gl/CBYGz3ubk31jWHRm7" target="_blank">N. Ramirez Ave., Quezon City</a><br>
            <a href="tel:+63287128276">(02) 8712 8276</a> / <a href="tel:+63">(02) 8712 3287 | <a href="mailto:customercare@udmc.com.ph">customercare@udmc.com.ph</a></li>

            <li><a href="https://www.facebook.com/UrologyCenterofthePhil/" target="_blank">Urology Center of the Philippines - </a><a href="https://maps.app.goo.gl/CBYGz3ubk31jWHRm7" target="_blank">62 Maginoo St., Diliman, Quezon City</a><br>
            <a href="tel:+63289903035">(02) 8990 3035</a></li>

            <li>Veterans Health Center - <a href="https://maps.app.goo.gl/2Aq3qfcJrTgUjmvdA" target="_blank">6 Faustino St., Brgy. Holy Spirit</a><br>
            <a href="tel:+6373931612">7393 1612/</a><a href="tel:+639152656224">09152656224</a> | <a href="mailto:veteranshc.cityhealth@quezoncity.gov.ph">veteranshc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Samantha+Justine+C+Dionisio" target="_blank">Dr. Samantha Justine C. Dionisio</a></li>

            <li><a href="https://www.facebook.com/WorldCitiMedicalCenter" target="_blank">World Citi Medical Center - </a><a href="https://maps.app.goo.gl/mPjsDE6XXiBN6nc17" target="_blank">Aurora Blvd. cor. Anonas St., Quezon City</a><br>
            <a href="tel:+63234629005">(02) 3462 9005/</a><a href="tel:+63289138380">(02) 8913 8380</a> | <a href="mailto:inquiry@worldcitimedicalcenter.com">inquiry@worldcitimedicalcenter.com</a> | <a href="https://worldcitimedicalcenter.com" target="_blank">worldcitimedicalcenter.com</a></li>
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
    <p class="health-info-subheading">Barangays: Commonwealth, Batasan Hills, Holy Spirit, Payatas, etc.</p>
    <div class="health-info-text">
      <ul>
        <li>Air Quality Alert: Areas like Tandang Sora and surrounding communities affected by poor air quality due to fires.</li>
        <li>Dengue Alert: Reported cases early in 2025 as part of city-wide outbreak.</li>
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
        <li>Health and Wellness Caravans.</li>
        <li>Community Wellness Programs</li>
        <li>Super Health Centers.</li>
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
