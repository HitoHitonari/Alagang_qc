<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="patient-registration-styles.css">
    <title>Patient Registration - Alagang Bayan</title>
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

    <div class="registration-container">
      <div class="registration-card">
        <div class="registration-header">
          <h2 class="registration-title">Patient Registration</h2>
          <p class="registration-subtitle">Please provide your information to create your patient profile</p>
        </div>
        
        <form class="registration-form" id="patientRegistrationForm" onsubmit="handleRegistrationSubmit(event)">
          
          <!-- Personal Information Section -->
          <div class="form-section">
            <h3 class="section-title">Personal Information</h3>
            
            <div class="form-row">
              <div class="form-group form-half">
                <label for="firstName" class="form-label">First Name *</label>
                <input 
                  type="text" 
                  id="firstName" 
                  name="firstName" 
                  class="form-input" 
                  required 
                  placeholder="Enter your first name"
                />
              </div>
              <div class="form-group form-half">
                <label for="lastName" class="form-label">Last Name *</label>
                <input 
                  type="text" 
                  id="lastName" 
                  name="lastName" 
                  class="form-input" 
                  required 
                  placeholder="Enter your last name"
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group form-third">
                <label for="age" class="form-label">Age *</label>
                <input 
                  type="number" 
                  id="age" 
                  name="age" 
                  class="form-input" 
                  required 
                  min="0" 
                  max="150"
                  placeholder="Age"
                />
              </div>
              <div class="form-group form-third">
                <label for="gender" class="form-label">Gender *</label>
                <select id="gender" name="gender" class="form-input" required>
                  <option value="">Select gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                  <option value="prefer-not-to-say">Prefer not to say</option>
                </select>
              </div>
              <div class="form-group form-third">
                <label for="birthDate" class="form-label">Date of Birth *</label>
                <input 
                  type="date" 
                  id="birthDate" 
                  name="birthDate" 
                  class="form-input" 
                  required 
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group form-half">
                <label for="email" class="form-label">Email Address *</label>
                <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  class="form-input" 
                  required 
                  placeholder="Enter your email address"
                />
              </div>
              <div class="form-group form-half">
                <label for="phone" class="form-label">Phone Number *</label>
                <input 
                  type="tel" 
                  id="phone" 
                  name="phone" 
                  class="form-input" 
                  required 
                  placeholder="Enter your phone number"
                />
              </div>
            </div>

            <div class="form-group">
              <label for="address" class="form-label">Complete Address *</label>
              <textarea 
                id="address" 
                name="address" 
                class="form-input form-textarea" 
                rows="3" 
                required
                placeholder="Enter your complete address"
              ></textarea>
            </div>
          </div>

          <!-- Emergency Contact Section -->
          <div class="form-section">
            <h3 class="section-title">Emergency Contact</h3>
            
            <div class="form-row">
              <div class="form-group form-half">
                <label for="emergencyName" class="form-label">Contact Name *</label>
                <input 
                  type="text" 
                  id="emergencyName" 
                  name="emergencyName" 
                  class="form-input" 
                  required 
                  placeholder="Emergency contact name"
                />
              </div>
              <div class="form-group form-half">
                <label for="emergencyPhone" class="form-label">Contact Phone *</label>
                <input 
                  type="tel" 
                  id="emergencyPhone" 
                  name="emergencyPhone" 
                  class="form-input" 
                  required 
                  placeholder="Emergency contact phone"
                />
              </div>
            </div>

            <div class="form-group">
              <label for="emergencyRelationship" class="form-label">Relationship *</label>
              <select id="emergencyRelationship" name="emergencyRelationship" class="form-input" required>
                <option value="">Select relationship</option>
                <option value="spouse">Spouse</option>
                <option value="parent">Parent</option>
                <option value="child">Child</option>
                <option value="sibling">Sibling</option>
                <option value="friend">Friend</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <!-- Medical Information Section -->
          <div class="form-section">
            <h3 class="section-title">Medical Information</h3>
            
            <div class="form-group">
              <label for="bloodType" class="form-label">Blood Type</label>
              <select id="bloodType" name="bloodType" class="form-input">
                <option value="">Select blood type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="unknown">Unknown</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label">Vaccinations Received</label>
              <div class="checkbox-group">
                <div class="checkbox-item">
                  <input type="checkbox" id="covid19" name="vaccinations" value="Covid-19">
                  <label for="covid19" class="checkbox-label">COVID-19</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" id="influenza" name="vaccinations" value="Influenza">
                  <label for="influenza" class="checkbox-label">Influenza (Flu)</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" id="hepatitisB" name="vaccinations" value="Hepatitis-B">
                  <label for="hepatitisB" class="checkbox-label">Hepatitis B</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" id="tetanus" name="vaccinations" value="Tetanus">
                  <label for="tetanus" class="checkbox-label">Tetanus</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" id="mmr" name="vaccinations" value="MMR">
                  <label for="mmr" class="checkbox-label">MMR (Measles, Mumps, Rubella)</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" id="pneumonia" name="vaccinations" value="Pneumonia">
                  <label for="pneumonia" class="checkbox-label">Pneumonia</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" id="other-vaccine" name="vaccinations" value="Other">
                  <label for="other-vaccine" class="checkbox-label">Other</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="allergies" class="form-label">Known Allergies</label>
              <textarea 
                id="allergies" 
                name="allergies" 
                class="form-input form-textarea" 
                rows="3" 
                placeholder="List any known allergies (medications, food, environmental, etc.)"
              ></textarea>
            </div>

            <div class="form-group">
              <label for="currentMedications" class="form-label">Current Medications</label>
              <textarea 
                id="currentMedications" 
                name="currentMedications" 
                class="form-input form-textarea" 
                rows="3" 
                placeholder="List all current medications, dosages, and frequency"
              ></textarea>
            </div>

            <div class="form-group">
              <label for="medicalHistory" class="form-label">Medical History</label>
              <textarea 
                id="medicalHistory" 
                name="medicalHistory" 
                class="form-input form-textarea" 
                rows="4" 
                placeholder="Describe any past medical conditions, surgeries, hospitalizations, or ongoing health issues"
              ></textarea>
            </div>

            <div class="form-group">
              <label for="familyHistory" class="form-label">Family Medical History</label>
              <textarea 
                id="familyHistory" 
                name="familyHistory" 
                class="form-input form-textarea" 
                rows="3" 
                placeholder="List any significant family medical history (diabetes, heart disease, cancer, etc.)"
              ></textarea>
            </div>
          </div>

          <!-- Lifestyle Information Section -->
          <div class="form-section">
            <h3 class="section-title">Lifestyle Information</h3>
            
            <div class="form-row">
              <div class="form-group form-half">
                <label class="form-label">Do you smoke?</label>
                <div class="radio-group">
                  <div class="radio-item">
                    <input type="radio" id="smokeYes" name="smoking" value="yes">
                    <label for="smokeYes" class="radio-label">Yes</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" id="smokeNo" name="smoking" value="no">
                    <label for="smokeNo" class="radio-label">No</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" id="smokeFormer" name="smoking" value="former">
                    <label for="smokeFormer" class="radio-label">Former smoker</label>
                  </div>
                </div>
              </div>
              <div class="form-group form-half">
                <label class="form-label">Do you drink alcohol?</label>
                <div class="radio-group">
                  <div class="radio-item">
                    <input type="radio" id="alcoholNever" name="alcohol" value="never">
                    <label for="alcoholNever" class="radio-label">Never</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" id="alcoholOccasionally" name="alcohol" value="occasionally">
                    <label for="alcoholOccasionally" class="radio-label">Occasionally</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" id="alcoholRegularly" name="alcohol" value="regularly">
                    <label for="alcoholRegularly" class="radio-label">Regularly</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exerciseFrequency" class="form-label">Exercise Frequency</label>
              <select id="exerciseFrequency" name="exerciseFrequency" class="form-input">
                <option value="">Select frequency</option>
                <option value="daily">Daily</option>
                <option value="several-times-week">Several times a week</option>
                <option value="once-week">Once a week</option>
                <option value="occasionally">Occasionally</option>
                <option value="never">Never</option>
              </select>
            </div>
          </div>

          <!-- Insurance Information Section -->
          <div class="form-section">
            <h3 class="section-title">Insurance Information</h3>
            
            <div class="form-row">
              <div class="form-group form-half">
                <label for="insuranceProvider" class="form-label">Insurance Provider</label>
                <input 
                  type="text" 
                  id="insuranceProvider" 
                  name="insuranceProvider" 
                  class="form-input" 
                  placeholder="Insurance company name"
                />
              </div>
              <div class="form-group form-half">
                <label for="policyNumber" class="form-label">Policy Number</label>
                <input 
                  type="text" 
                  id="policyNumber" 
                  name="policyNumber" 
                  class="form-input" 
                  placeholder="Insurance policy number"
                />
              </div>
            </div>
          </div>

          <!-- Consent Section -->
          <div class="form-section">
            <div class="consent-group">
              <div class="checkbox-item">
                <input type="checkbox" id="dataConsent" name="dataConsent" required>
                <label for="dataConsent" class="checkbox-label">
                  I consent to the collection and processing of my personal and medical information for healthcare purposes *
                </label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="communicationConsent" name="communicationConsent">
                <label for="communicationConsent" class="checkbox-label">
                  I agree to receive appointment reminders and health-related communications
                </label>
              </div>
            </div>
          </div>

          <button type="submit" class="registration-submit-button">
            Complete Registration
          </button>
        </form>

        <div class="form-footer">
          <p class="form-footer-text">
            Already have an account? <a href="login.php" class="form-link">Sign In</a>
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

      function handleRegistrationSubmit(event) {
        event.preventDefault();
        
        // Get form data
        const formData = new FormData(event.target);
        
        // Get vaccination data
        const vaccinations = [];
        const vaccinationCheckboxes = document.querySelectorAll('input[name="vaccinations"]:checked');
        vaccinationCheckboxes.forEach(checkbox => {
          vaccinations.push(checkbox.value);
        });
        
        const patientData = {
          personalInfo: {
            firstName: formData.get('firstName'),
            lastName: formData.get('lastName'),
            age: formData.get('age'),
            gender: formData.get('gender'),
            birthDate: formData.get('birthDate'),
            email: formData.get('email'),
            phone: formData.get('phone'),
            address: formData.get('address')
          },
          emergencyContact: {
            name: formData.get('emergencyName'),
            phone: formData.get('emergencyPhone'),
            relationship: formData.get('emergencyRelationship')
          },
          medicalInfo: {
            bloodType: formData.get('bloodType'),
            vaccinations: vaccinations,
            allergies: formData.get('allergies'),
            currentMedications: formData.get('currentMedications'),
            medicalHistory: formData.get('medicalHistory'),
            familyHistory: formData.get('familyHistory')
          },
          lifestyle: {
            smoking: formData.get('smoking'),
            alcohol: formData.get('alcohol'),
            exerciseFrequency: formData.get('exerciseFrequency')
          },
          insurance: {
            provider: formData.get('insuranceProvider'),
            policyNumber: formData.get('policyNumber')
          },
          consent: {
            dataConsent: formData.get('dataConsent') === 'on',
            communicationConsent: formData.get('communicationConsent') === 'on'
          }
        };
        
        // Here you would typically send the data to your backend
        console.log('Patient Registration Data:', patientData);
        
        // Show success message
        alert('Patient registration completed successfully! Your profile has been created.');
        
        // Optionally redirect to login page or dashboard
        // window.location.href = 'login.php';
      }
    </script>

    <script>
function handleRegistrationSubmit(event) {
  event.preventDefault();

  const form = document.getElementById("patientRegistrationForm");
  const formData = new FormData(form);
  const data = {};

  for (let [key, value] of formData.entries()) {
    if (data[key]) {
      if (!Array.isArray(data[key])) data[key] = [data[key]];
      data[key].push(value);
    } else {
      data[key] = value;
    }
  }

  fetch("insert_history.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data)
  })
  .then(response => {
    if (!response.ok) return response.text().then(text => { throw new Error(text); });
    return response.text();
  })
  .then(text => {
    if (text === "success") {
      alert("Medical history saved successfully!");
      form.reset(); // optional: clears the form
    } else {
      alert("Unexpected response: " + text);
    }
  })
  .catch(error => {
    alert("Error saving data: " + error.message);
  });
}
</script>

  </body>
</html>
