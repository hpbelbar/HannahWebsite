<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Signup Form</h1>
        <form method="post" action="signup.php">
            <?php include('errors.php'); ?>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5>Full Name</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5>Address</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="lotBlkStreet" class="form-label">Lot/Blk, Street</label>
                    <input type="text" class="form-control" id="lotBlkStreet" name="lotBlkStreet" placeholder="Enter Lot/Blk, Street" required>
                </div>
                <div class="col-md-6">
                    <label for="province" class="form-label">Province</label>
                    <select class="form-select" id="province" name="province" required onchange="updateCities()">
                        <option selected disabled>Select Province</option>
                        <option value="Abra">Abra</option>
                        <option value="Agusan del Norte">Agusan del Norte</option>
                        <option value="Aklan">Aklan</option>
    <option value="Albay">Albay</option>
    <option value="Antique">Antique</option>
    <option value="Apayao">Apayao</option>
    <option value="Aurora">Aurora</option>
    <option value="Basilan">Basilan</option>
    <option value="Bataan">Bataan</option>
    <option value="Batanes">Batanes</option>
    <option value="Batangas">Batangas</option>
    <option value="Benguet">Benguet</option>
    <option value="Biliran">Biliran</option>
    <option value="Bohol">Bohol</option>
    <option value="Bukidnon">Bukidnon</option>
    <option value="Bulacan">Bulacan</option>
    <option value="Cagayan">Cagayan</option>
    <option value="Camarines Norte">Camarines Norte</option>
    <option value="Camarines Sur">Camarines Sur</option>
    <option value="Camiguin">Camiguin</option>
    <option value="Capiz">Capiz</option>
    <option value="Catanduanes">Catanduanes</option>
    <option value="Cavite">Cavite</option>
    <option value="Cebu">Cebu</option>
    <option value="Compostela Valley">Compostela Valley</option>
    <option value="Cotabato">Cotabato</option>
    <option value="Davao del Norte">Davao del Norte</option>
    <option value="Davao del Sur">Davao del Sur</option>
    <option value="Davao Occidental">Davao Occidental</option>
    <option value="Davao Oriental">Davao Oriental</option>
    <option value="Dinagat Islands">Dinagat Islands</option>
    <option value="Eastern Samar">Eastern Samar</option>
    <option value="Guimaras">Guimaras</option>
    <option value="Ifugao">Ifugao</option>
    <option value="Ilocos Norte">Ilocos Norte</option>
    <option value="Ilocos Sur">Ilocos Sur</option>
    <option value="Iloilo">Iloilo</option>
    <option value="Isabela">Isabela</option>
    <option value="Kalinga">Kalinga</option>
    <option value="La Union">La Union</option>
    <option value="Laguna">Laguna</option>
    <option value="Lanao del Norte">Lanao del Norte</option>
    <option value="Lanao del Sur">Lanao del Sur</option>
    <option value="Leyte">Leyte</option>
    <option value="Maguindanao">Maguindanao</option>
    <option value="Marinduque">Marinduque</option>
    <option value="Masbate">Masbate</option>
    <option value="Metro Manila">Metro Manila</option>
    <option value="Misamis Occidental">Misamis Occidental</option>
    <option value="Misamis Oriental">Misamis Oriental</option>
    <option value="Mountain Province">Mountain Province</option>
    <option value="Negros Occidental">Negros Occidental</option>
    <option value="Negros Oriental">Negros Oriental</option>
    <option value="Northern Samar">Northern Samar</option>
    <option value="Nueva Ecija">Nueva Ecija</option>
    <option value="Nueva Vizcaya">Nueva Vizcaya</option>
    <option value="Occidental Mindoro">Occidental Mindoro</option>
    <option value="Oriental Mindoro">Oriental Mindoro</option>
    <option value="Palawan">Palawan</option>
    <option value="Pampanga">Pampanga</option>
    <option value="Pangasinan">Pangasinan</option>
    <option value="Quezon">Quezon</option>
    <option value="Quirino">Quirino</option>
    <option value="Rizal">Rizal</option>
    <option value="Romblon">Romblon</option>
    <option value="Samar">Samar</option>
    <option value="Sarangani">Sarangani</option>
    <option value="Siquijor">Siquijor</option>
    <option value="Sorsogon">Sorsogon</option>
    <option value="South Cotabato">South Cotabato</option>
    <option value="Southern Leyte">Southern Leyte</option>
    <option value="Sultan Kudarat">Sultan Kudarat</option>
    <option value="Sulu">Sulu</option>
    <option value="Surigao del Norte">Surigao del Norte</option>
    <option value="Surigao del Sur">Surigao del Sur</option>
    <option value="Tarlac">Tarlac</option>
    <option value="Tawi-Tawi">Tawi-Tawi</option>
    <option value="Zambales">Zambales</option>
    <option value="Zamboanga del Norte">Zamboanga del Norte</option>
    <option value="Zamboanga del Sur">Zamboanga del Sur</option>
    <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="cityMunicipality" class="form-label">City/Municipality</label>
                    <select class="form-select" id="cityMunicipality" name="cityMunicipality" required onchange="updateBarangays()">
                        <option selected disabled>Select City/Municipality</option>
                        <!-- Options will be populated dynamically based on province selection -->
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="barangay" class="form-label">Barangay</label>
                    <select class="form-select" id="barangay" name="barangay"required>
                        <option selected disabled>Select Barangay</option>
                        <!-- Options will be populated dynamically using JavaScript -->
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" name="country" required>
                            <option selected disabled>Select Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czechia">Czechia</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Eswatini">Eswatini</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, North">Korea, North</option>
                            <option value="Korea, South">Korea, South</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="North Macedonia">North Macedonia</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                </div>
                <div class="col-md-6">
                    <label for="countryCode" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="countryCode" name="countryCode" placeholder="Enter Contact Number" required>
                </div>                
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="repeatPassword" class="form-label">Repeat Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="Repeat Password" required>
                        <button class="btn btn-outline-secondary" type="button" id="toggleRepeatPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <button type="submit" name="signup" class="btn btn-primary">Signup</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        var input = document.querySelector("#countryCode");
        window.intlTelInput(input, {
            preferredCountries: ['us', 'gb', 'ph'], // Add more preferred countries if needed
            separateDialCode: true,
            initialCountry: "auto",
            geoIpLookup: function (success, failure) {
                // Make an AJAX call to get the user's country based on their IP
            }
        });
    </script>
    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(inputField, toggleButton) {
            var type = inputField.getAttribute('type') === 'password' ? 'text' : 'password';
            inputField.setAttribute('type', type);
            toggleButton.classList.toggle('fa-eye-slash');
        }
    
        // Event listener for toggle password button
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var toggleButton = this;
            togglePasswordVisibility(passwordInput, toggleButton);
        });
    
        // Event listener for toggle repeat password button
        document.getElementById('toggleRepeatPassword').addEventListener('click', function() {
            var repeatPasswordInput = document.getElementById('repeatPassword');
            var toggleButton = this;
            togglePasswordVisibility(repeatPasswordInput, toggleButton);
        });
    </script>
    
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="signup.js"></script>
</body>
</html>
