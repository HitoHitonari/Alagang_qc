<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="districts.css">
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
        <h1 class="district-title">District III</h1>
        <h2 class="district-subheading">Strengthening Healthcare Outreach</h2>
        <p class="district-description">
          District 3 covers a significant portion of Southern Quezon City, known for its vibrant communities it focus on preventive care and emergency services, their health programs address the challenges head-on.
          The District recorded a notable number of dengue cases, prompting the local government to ramp up efforts in disease prevention.. Health and wellness caravans are regularly conducted, offering free consultations and vaccination drives, while public health education is a top priority.
        </p>
      </div>
      <img src="./imgs/district_3.jpg" alt="District III Image" class="district-image" />
    </section>

    <section class="health-services-section">
      <h2 class="health-services-title">Health Services Information</h2>
      <h3 class="health-services-subheading">List of centers and hospitals:</h3>
      <div class="health-services-details">
        <ul>
            <li>E. Rodriguez Health Center - <a href="https://maps.app.goo.gl/MbndmqrAYTHZkyBa6" target="_blank">150 Pajo Street, Project 2, Brgy. Quirino 2-B</a><br>
            <a href="tel:+6371171761">7117 1761</a> | <a href="mailto:erodriguezhc.cityhealth@quezoncity.gov.ph">erodriguezhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Fe+S+Florendo" target="_blank">Dr. Fe S. Florendo</a></li>

            <li>Ermin Garcia Health Center - <a href="https://maps.app.goo.gl/ssaogQLQ8fK1JSzd9" target="_blank">53 Cambridge Street, Brgy. E. Rodriguez, Cubao</a><br>
            <a href="tel:+6370002314">7000 2314</a> | <a href="mailto:ermingarciahc.cityhealth@quezoncity.gov.ph">ermingarciahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Obermay+S+Carabeo" target="_blank">Dr. Obermay S. Carabeo</a></li>

            <li>Escopa Sentrong Sigla Health Center - <a href="https://maps.app.goo.gl/EnrKjxTVGwijxwQF9" target="_blank">P. Burgos Street, Brgy. Escopa, Project 4</a><br>
            <a href="tel:+6379431484">7943 1484</a> | <a href="mailto:escopahc.cityhealth@quezoncity.gov.ph">escopahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Paul+Bryan+M+Sumague" target="_blank">Dr. Paul Bryan M. Sumague</a></li>

            <li>Libis Health Center - <a href="https://maps.app.goo.gl/vR9XFYZ1Dxkassu56" target="_blank">E. Rodriguez Jr. Avenue cor. L. Pasco Street, Brgy. Libis</a><br>
            <a href="tel:+6385523022">8552 3022</a> | <a href="mailto:libishc.cityhealth@quezoncity.gov.ph">libishc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Vincent+Lou+R+Mendoza" target="_blank">Dr. Vincent-Lou R. Mendoza</a></li>

            <li>Murphy Super Health Center - <a href="https://maps.app.goo.gl/DDkdy661AWSifjg79" target="_blank">35 18th Avenue, Brgy. San Roque</a><br>
            <a href="tel:+6375292027">7529 2027</a> | <a href="mailto:murphyshc.cityhealth@quezoncity.gov.ph">murphyshc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Thon+Justin+G+Filart" target="_blank">Dr. Thon Justin G. Filart</a></li>

            <li>Old Balara Health Center - <a href="https://maps.app.goo.gl/ZCVKqbVyNrdSj5Yv6" target="_blank">19 Doña Filomena St., Villa Beatriz, Brgy. Old Balara</a><br>
            <a href="tel:+6384429251">8442 9251</a> | <a href="mailto:oldbalarahc.cityhealth@quezoncity.gov.ph">oldbalarahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+David+Nolan+L+Cachola" target="_blank">Dr. David Nolan L. Cachola</a></li>

            <li>Pansol Health Center - <a href="https://maps.app.goo.gl/7fkSezY6EXgPFeqH7" target="_blank">Plaza St., Brgy. Pansol</a><br>
            <a href="tel:+6370038537">7003 8537</a> | <a href="mailto:pansolhc.cityhealth@quezoncity.gov.ph">pansolhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Charissa+L+Alisuag" target="_blank">Dr. Charissa L. Alisuag</a></li>

            <li>Project 4 Health Center - <a href="https://maps.app.goo.gl/Mj9n5Yz6ztLKxkyGA" target="_blank">Kalantiaw St. cor. P. Tuazon, Brgy. Bagumbuhay</a><br>
            <a href="tel:+6371490023">7149 0023</a> | <a href="mailto:project4hc.cityhealth@quezoncity.gov.ph">project4hc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Marilin+R+Santos" target="_blank">Dr. Marilin R. Santos</a></li>

            <li>Quirino Memorial Medical Center - <a href="https://maps.app.goo.gl/RqdVdvaFqnP6LLaP6" target="_blank">J.P. Rizal, Project 4, Lungsod Quezon</a><br>
            <a href="tel:+63253049800">(02) 5304 9800</a></li>

            <li>Socorro Health Center - <a href="https://maps.app.goo.gl/1QQLZPKcv6ornMrm6" target="_blank">139 15th Avenue, Brgy. Socorro</a><br>
            <a href="tel:+63271177234">(02) 7117 7234</a> | <a href="mailto:socorrohc.cityhealth@quezoncity.gov.ph">socorrohc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Cooper+Nikko+C+Chavez" target="_blank">Dr. Cooper Nikko C. Chavez</a></li>
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
    <p class="health-info-subheading">Barangays: Cubao, E. Rodriguez, Kamuning, etc.</p>
    <div class="health-info-text">
      <ul>
        <li>Air Quality Alert: Areas like Tandang Sora and surrounding communities affected by poor air quality due to fires.</li>
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
        <li>Dengue Prevention Campaign</li>
        <li>Super Health Centers</li>
        <li>Mobile Health Clinics</li>
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
