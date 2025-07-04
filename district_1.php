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
        <h1 class="district-title">District I</h1>
        <h2 class="district-subheading">United for a Healthier Community</h2>
        <p class="district-description">
          District 1 of Quezon City is a dynamic and densely populated area that includes key barangays such as Project 8 and San Francisco Del Monte.
          Local health centers and barangay health stations are at the heart of community care, offering vital services like immunizations, maternal and child health programs, disease prevention, and emergency response. Residents rely on these facilities for accessible and reliable healthcare, while healthcare providers work tirelessly to meet the needs of a growing population through dedication, coordination, and compassion. Support from local officials plays a crucial role in maintaining and improving these services—ensuring that facilities are well-equipped, staff are well-trained, and policies are responsive to the real needs of the community. Together, residents, health workers, and the city leaders form a strong foundation for a healthier, more resilient District 1.
        </p>
      </div>
      <img src="./imgs/district_1.jpg" alt="District I Image" class="district-image" />
    </section>

    <section class="health-services-section">
      <h2 class="health-services-title">Health Services Information</h2>
      <h3 class="health-services-subheading">List of centers and hospitals:</h3>
      <div class="health-services-details">
        <ul>
          <li>Bago Bantay Health Center - <a href="https://maps.app.goo.gl/zRmYh3ixBcXssRPWA" target="_blank">84 Sto. Nino St., Brgy. Alicia</a><br>
          <a href="tel:+639331422533">09331422533</a> | <a href="mailto:bagobantayhc.cityhealth@quezoncity.gov.ph">bagobantayhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Stephanie+Joshua+G+Rivera" target="_blank">Dr. Stephanie Joshua G. Rivera</a></li>
          
          <li>Bagong Pag-asa Health Center - <a href="https://maps.app.goo.gl/gM3K788jgdv4YwmS8" target="_blank">36 Road 9 cor. Road 10, Brgy. Bagong Pag-asa</a><br>
          <a href="tel:+639196667054">09196667054</a> | <a href="mailto:bagongpagasahc.cityhealth@quezoncity.gov.ph">bagongpagasahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Ferdinand+C+Cavalida" target="_blank">Dr. Ferdinand C. Cavalida</a></li>
          
          <li>Balingasa Health Center - <a href="https://maps.app.goo.gl/8YEkJP9bpaK3VkCX7" target="_blank">26 J. Aquino Cruz St., Brgy. Balingasa</a><br>
          <a href="tel:+639161710747">09161710747</a> | <a href="mailto:balingasahc.cityhealth@quezoncity.gov.ph">balingasahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Romarie+Jane+M+Queddeng" target="_blank">Dr. Romarie Jane M. Queddeng</a></li>
          
          <li>La Loma Health Center - <a href="https://maps.app.goo.gl/yZ19B2178cNcEMZd7" target="_blank">225 Mariveles St., Brgy. Paang Bundok</a><br>
          <a href="tel:+6371210645">7121 0645</a> | <a href="mailto:lomahc.cityhealth@quezoncity.gov.ph">lomahc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Gavina+Aurora+F+David" target="_blank">Dr. Gavina Aurora F. David</a></li>
          
          <li><a href="https://www.facebook.com/LungCenterofthePhilippines." target="_blank">Lung Center of the Philippines - </a><a href="https://maps.app.goo.gl/p8tSeBB32Y7kCKWC8" target="_blank">Quezon Ave, Diliman, Quezon City</a><br>
          <a href="tel:+63289246101">(02) 8924 6101</a> | <a href="https://lcp.gov.ph" target="_blank">lcp.gov.ph</a></li>
          
          <li>Masambong Health Center - <a href="https://maps.app.goo.gl/43AmCH6ciEdCCHTcA" target="blank">8 Malac St., Brgy. Masambong</a><br>
          <a href="tel:+639205246039">09205246039</a> | <a href="mailto:masambonghc.cityhealth@quezoncity.gov.ph">masambonghc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Jose+Maria+F+Fernandez" target="_blank">Dr. Jose Maria F. Fernandez</a></li>
          
          <li>Mercedes de Joya Health Center - <a href="https://maps.app.goo.gl/TLpLxAWtiqe5gT8w7" target="_blank">Dapitan cor. Mayon St., Brgy. Sta Teresita</a><br>
          <a href="tel:+639328430155">09328430155</a> | <a href="mailto:mdjhc.cityhealth@quezoncity.gov.ph">mdjhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Joyce+Nicole+B+Demoga" target="_blank">Dr. Joyce Nicole B. Demoga</a></li>
          
          <li>Paltok Health Center - <a href="https://maps.app.goo.gl/FfnjZuij7YyMWDuo9" target="_blank">14 Matias St., Brgy. Paltok</a><br>
          <a href="tel:+639175443411">09175443411</a> | <a href="mailto:paltokhc.cityhealth@quezoncity.gov.ph">paltokhc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Jan+Dominik+C+Arceo" target="_blank">Dr. Jan Dominik C. Arceo</a></li>
          
          <li>Project 6 Health Center - <a href="https://maps.app.goo.gl/Yyh3Cu1yWYpAKUZL7" target="_blank">58 Alley 3, Brgy. Project 6</a><br>
          <a href="tel:+639178986815">09178986815</a> | <a href="mailto:project6hc.cityhealth@quezoncity.gov.ph">project6hc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Arnold+E+Monteiro" target="_blank">Dr. Arnold E. Monteiro</a></li>
          
          <li>Project 7 Health Center - <a href="https://maps.app.goo.gl/3Xg2ooKidut8NXaN7" target="_blank">39 Bansalangin St., Brgy. Veterans Village</a><br>
          <a href="tel:+639926826490">09926826490</a> | <a href="mailto:project7hc.cityhealth@quezoncity.gov.ph">project7hc.cityhealth@quezoncity.gov.ph</a> | <a href="https://www.google.com/search?q=Dr+Kheizl+Mae+R+Bernardo" target="_blank">Dr. Kheizl Mae R. Bernardo</a></li>
          
          <li>San Antonio Health Center - <a href="https://maps.app.goo.gl/ybQNbg5voft65nDM9" target="_blank">38 San Jose, Brgy. San Antonio</a><br>
          <a href="tel:+6383748925">8374 8925</a> | <a href="mailto:sanantoniohc.cityhealth@quezoncity.gov.ph">sanantoniohc.cityhealth@quezoncity.gov.ph</a></li>
          
          <li>San Francisco Super Health Center - <a href="https://maps.app.goo.gl/FZTTah3hrkgWikZD6" target="_blank">H. Francisco cor. San Vicente St., Brgy. Damayan</a><br>
          <a href="tel:+639567099857">09567099857</a> | <a href="https://www.google.com/search?q=Dr+Mechael+Angelo+A+Marasigan" target="_blank">Dr. Mechael Angelo A. Marasigan</a></li>
          
          <li>San Jose Health Center - <a href="https://maps.app.goo.gl/F2db4GQ4gtLtZC9c8" target="_blank">27 Tinagan St., Brgy. San Jose</a><br>
          <a href="tel:+6371481871">7148 1871</a> | <a href="mailto:sanjosehc.cityhealth@quezoncity.gov.ph">sanjosehc.cityhealth@quezoncity.gov.ph</a></li>
          
          <li>Toro Hills Health Center - <a href="https://maps.app.goo.gl/BV1qFEiZPUMEt5PL8" target="_blank">Road 11 Seminary Road, Brgy. Bahay Toro</a><br>
          <a href="https://www.google.com/search?q=Dr+Clairol+M+Astilla" target="_blank">Dr. Clairol M. Astilla, MD III, OIC</a></li>
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
    <p class="health-info-subheading">Barangays: Bago Bantay, Bagong Pag-asa, Project 6, etc.</p>
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
        <li>Legislation Week Wellness Program</li>
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
