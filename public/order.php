<?php
    include "../boot.php";
    // als de request method post is word de shit hieronder uitgevoert
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $variables = [
            'first_name' => ['required', 'name', 'min:2', 'max:100'],
            'suffix_name' => ['name', 'max:25'],
            'last_name' => ['required', 'name', 'min:2', 'max:100'],
            'country' => ['required', 'name', 'min:2', 'max:100'],
            'city' => ['required', 'name', 'min:2', 'max:100'],
            'street' => ['required', 'name', 'min:2', 'max:100'],
            'street_number' => ['required', 'number', 'min:1', 'max:5'],
            'street_suffix' => ['max:100'],
            'zipcode' => ['required', 'postcode'],
            'email' => ['required', 'email', 'min:7', 'max:155'],
            'password' => ['required', 'min:8', 'confirmed'],
        ];

        require '../app/validation/validations.php';
        // als er 0 errors zijn dan gaat hij naar de geslaagd pagina
        if(count($errors) == 0) {
            require '../app/payment/new.php';
            header('Location: '.asset('geslaagd.php')); 
        }
   }

   function value($key)
   {
       return @$_POST[$key];
   }
    
?>

<!DOCTYPE html>
<html>
<head>
   <title>Pc Parts</title>
    <meta charset="utf-8">
    <meta name="keywords" content="webshop, pc, parts, gpu, cpu, case, moederbord">
    <meta name="author" content="Fabian">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('styles/inschrijven.css'); ?>">
</head>
<body>  
    <section class="container">
        <form method="POST" action="">

            <div class="formgroup">
              <label>
                Voornaam<span style="color: red !important; display: inline; float: none;">*</span>
              </label>
              <div>
                <input name="first_name" type="text" placeholder="voornaam" required="true" value="<?php echo value('first_name'); ?>">
                <?php echo (@$errors['first_name']) ? '<p class="text-danger">'.$errors['first_name'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
              <label>
                Tussenvoegsel
              </label>
              <div>
                <input name="suffix_name" type="text" placeholder="tussenvoegsel" value="<?php echo value('suffix_name'); ?>">
                <?php echo (@$errors['suffix_name']) ? '<p class="text-danger">'.$errors['suffix_name'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
              <label>
                Achternaam<span style="color: red !important; display: inline; float: none;">*</span>
              </label>
              <div>
                <input name="last_name" type="text" placeholder="achternaam" required="true" value="<?php echo value('last_name'); ?>">
                <?php echo (@$errors['last_name']) ? '<p class="text-danger">'.$errors['last_name'][0].'</p>' : ''; ?>
              </div>
            </div>

            <label for="country">Land<span style="color: red !important; display: inline; float: none;">*</span></label>      
            
                <select id="country" name="country" class="formgroup" value="<?php echo value('country'); ?>">
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
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
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
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
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option><q>-11234567890</q>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
                <?php echo (@$errors['country']) ? '<p class="text-danger">'.$errors['country'][0].'</p>' : ''; ?>

              <div class="formgroup">
                <label>
                  Stad<span style="color: red !important; display: inline; float: none;">*</span>
                </label>
                <div>
                  <input name="city" type="text" placeholder="Stad" required="true" value="<?php echo value('city'); ?>">
                  <?php echo (@$errors['city']) ? '<p class="text-danger">'.$errors['city'][0].'</p>' : ''; ?>
                </div>
              </div>

              <div class="formgroup">
              <label>
                Straat<span style="color: red !important; display: inline; float: none;">*</span>
              </label>
              <div>
                <input name="street" type="text" placeholder="Straat" required="true" value="<?php echo value('street'); ?>">
                <?php echo (@$errors['street']) ? '<p class="text-danger">'.$errors['street'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
                <label>
                    Huisnummer<span style="color: red !important; display: inline; float: none;">*</span>
                </label>
                <div>
                    <input type="text" name="street_number" placeholder="street number" value="<?php echo value('street_number'); ?>">
                    <?php echo (@$errors['street_number']) ? '<p class="text-danger">'.$errors['street_number'][0].'</p>' : ''; ?>
                </div>
            </div>

            <div class="formgroup">
              <label>
                Toevoeging
              </label>
              <div>
                <input name="street_suffix" type="text" placeholder="Toevoeging" value="<?php echo value('street_suffix'); ?>">
                <?php echo (@$errors['street_suffix']) ? '<p class="text-danger">'.$errors['street_suffix'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
              <label>
                Postcode<span style="color: red !important; display: inline; float: none;">*</span>
              </label>
              <div>
                <input name="zipcode" type="text" placeholder="Postcode" required="true" value="<?php echo value('zipcode'); ?>">
                <?php echo (@$errors['zipcode']) ? '<p class="text-danger">'.$errors['zipcode'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
              <label>
                Email<span class="required">*</span>
              </label>
              <div>
                <input name="email" type="text" placeholder="Email" required="true" value="<?php echo value('email'); ?>">
                <?php echo (@$errors['email']) ? '<p class="text-danger">'.$errors['email'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
              <label>
                Wachtwoord<span class="required">*</span>
              </label>
              <div>
                <input name="password" type="password" placeholder="Wachtwoord" required="true" value="<?php echo value('password'); ?>">
                <?php echo (@$errors['password']) ? '<p class="text-danger">'.$errors['password'][0].'</p>' : ''; ?>
              </div>
            </div>

             <div class="formgroup">
              <label>
                Wachtwoord herhalen<span class="required">*</span>
              </label>
              <div>
                <input name="password_confirmed" type="password" placeholder="Wachtwoord" required="true" value="<?php echo value('password_confirmed'); ?>">
                <?php echo (@$errors['password_confirmed']) ? '<p class="text-danger">'.$errors['password_confirmed'][0].'</p>' : ''; ?>
              </div>
            </div>

            <div class="formgroup">
              <button type="submit">Bestel!</button>
            </div>

        </form>
    </section>
</body>
</html>