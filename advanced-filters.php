<?php 
$title = "Advanced Filters";
require('controllers/advanced-filters.php');
include './partials/header.php'; 

?>

<div class="main__search_container">
    <div class="main_search_background">
        <div class="main_search">
            <div class="main_search_event">
                <svg viewBox="0 0 16 16" role="presentation" aria-hidden="true" focusable="false" style="height: 32; width: 32; display: block; fill: currentcolor;"><path d="m2.5 7c0-2.5 2-4.5 4.5-4.5s4.5 2 4.5 4.5-2 4.5-4.5 4.5-4.5-2-4.5-4.5m13.1 6.9-2.8-2.9c.7-1.1 1.2-2.5 1.2-4 0-3.9-3.1-7-7-7s-7 3.1-7 7 3.1 7 7 7c1.5 0 2.9-.5 4-1.2l2.9 2.8c.2.3.5.4.9.4.3 0 .6-.1.8-.4.5-.5.5-1.2 0-1.7"></path></svg>
                <input placeholder="Rechercher un style de musique, un festival.." />
            </div>
            <div class="search_filter_container">
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="center-title-search">
                        <svg width="30" height="30" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M60.3196 0.285226C60.0722 0.068735 59.7458 -0.0297741 59.4159 0.00917136L23.9068 4.60359C23.3363 4.67804 22.9091 5.16257 22.9091 5.73874V12.6309V17.4556V46.5318C20.8175 44.0175 17.4945 42.3818 13.7455 42.3818C7.42942 42.3818 2.29091 47.006 2.29091 52.6909C2.29091 58.3758 7.42942 63 13.7455 63C20.0615 63 25.2 58.3758 25.2 52.6909C25.2 52.4252 25.1782 52.164 25.1553 51.904C25.1702 51.8295 25.2 51.762 25.2 51.6841V18.4624L58.4182 14.1636V35.0761C56.3266 32.563 53.0036 30.9273 49.2545 30.9273C42.9385 30.9273 37.8 35.5515 37.8 41.2364C37.8 46.9213 42.9385 51.5455 49.2545 51.5455C55.5133 51.5455 60.6094 47.0026 60.7011 41.3887C60.7011 41.3738 60.7091 41.3612 60.7091 41.3463V12.86V8.03652V1.14546C60.7091 0.815571 60.5671 0.501717 60.3196 0.285226ZM13.7455 60.7091C8.69285 60.7091 4.58182 57.1112 4.58182 52.6909C4.58182 48.2706 8.69285 44.6727 13.7455 44.6727C18.7981 44.6727 22.9091 48.2706 22.9091 52.6909C22.9091 57.1112 18.7981 60.7091 13.7455 60.7091ZM49.2545 49.2546C44.2019 49.2546 40.0909 45.6567 40.0909 41.2364C40.0909 36.8161 44.2019 33.2182 49.2545 33.2182C54.3071 33.2182 58.4182 36.8161 58.4182 41.2364C58.4182 45.6567 54.3071 49.2546 49.2545 49.2546ZM25.2 16.1521V12.6309V6.74559L58.4182 2.44784V8.03652V11.8532L25.2 16.1521Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="63" height="63" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <p class="search_filter_name filter">Genres</p>
                        </div>
                        <select class="select-genre">  
                            <option value="all">Tous</option>  
                            <option value="KnvZfZ7vAvv">Alternative</option>
                            <option value="KnvZfZ7vAvd">Blues</option>
                            <option value="KnvZfZ7vAvF">Dance/Electronic</option>
                            <option value="KnvZfZ7vAeJ">Classical</option>
                            <option value="KnvZfZ7vAv6">Country</option>
                            <option value="KnvZfZ7vAv1">Hip-Hop/Rap</option>
                            <option value="KnvZfZ7vAJ6">Latin</option>
                            <option value="KnvZfZ7vAvE">Jazz</option>
                            <option value="KnvZfZ7vAe7">Religious</option>
                            <option value="KnvZfZ7vAvt">Metal</option>                        
                            <option value="KnvZfZ7vAvl">Other</option>
                            <option value="KnvZfZ7vAev">Rock</option>
                            <option value="KnvZfZ7vAee">R&B</option>
                            <option value="KnvZfZ7vAev">Pop</option>
                        </select>
                        <div class="submit-genre">Appliquer ce genre</div>
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="center-title-search">
                        <svg width="30" height="30" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M13.9403 67.3709C13.6847 67.3709 13.429 67.2919 13.2141 67.135C12.8337 66.8584 12.6435 66.3903 12.7238 65.9271L16.5414 43.6735L0.373002 27.9152C0.0370615 27.5867 -0.0839759 27.0963 0.060528 26.6505C0.206267 26.2034 0.592846 25.8773 1.05847 25.8094L23.401 22.5624L33.394 2.31577C33.6015 1.89338 34.0313 1.6266 34.5006 1.6266C34.9712 1.6266 35.401 1.89338 35.6073 2.31577L45.599 22.5624L67.9428 25.8094C68.4084 25.8773 68.7937 26.2021 68.9407 26.6505C69.0852 27.0963 68.9654 27.5879 68.6282 27.9152L52.4599 43.676L56.2762 65.9284C56.3553 66.3915 56.1651 66.8596 55.7859 67.1363C55.4055 67.4154 54.9004 67.4512 54.4842 67.2301L34.5006 56.7246L14.5146 67.2301C14.3343 67.324 14.1367 67.3709 13.9403 67.3709ZM3.88926 27.893L18.7299 42.3594C19.0202 42.6422 19.1536 43.0523 19.0844 43.4525L15.5805 63.8781L33.9263 54.2347C34.2857 54.0445 34.7143 54.0445 35.0762 54.2347L53.4195 63.8781L49.9168 43.4525C49.8477 43.0523 49.9811 42.6435 50.2713 42.3594L65.112 27.893L44.6035 24.9127C44.2009 24.8547 43.8539 24.6015 43.6735 24.2371L34.5006 5.65419L25.3277 24.2384C25.1474 24.6027 24.8003 24.8559 24.3977 24.914L3.88926 27.893Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="69" height="69" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <p class="search_filter_name filter">Pour les familles</p>
                        </div>
                        <div class="checkbox-family">
                            <input class="checkbox-family-input" type="checkbox" name="family"/>
                            <label for="family">Adapté aux familles </label>
                        </div>      
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="center-title-search">
                        <svg width="30" height="30" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.0758 11.3015C49.1136 4.11976 41.2492 0 32.5008 0C23.7523 0 15.8879 4.11976 10.9257 11.3015C5.98787 18.4469 4.8477 27.4932 7.86969 35.4856C8.67801 37.6681 9.9629 39.7886 11.6796 41.7757L30.7705 64.1999C31.2023 64.7075 31.8349 65 32.5008 65C33.1666 65 33.7992 64.7076 34.231 64.1999L53.3166 41.7818C55.0409 39.7833 56.3241 37.6651 57.1257 35.5C60.1538 27.4932 59.0136 18.4469 54.0758 11.3015ZM52.8697 33.9083C52.2516 35.5787 51.2425 37.2303 49.872 38.8188C49.8682 38.8226 49.8644 38.8265 49.8613 38.831L32.5008 59.222L15.1295 38.8182C13.7598 37.231 12.7507 35.5796 12.1264 33.8932C9.62723 27.2834 10.5757 19.8038 14.6644 13.8864C18.7658 7.95006 25.2674 4.54543 32.5008 4.54543C39.734 4.54543 46.2348 7.94993 50.3364 13.8864C54.4258 19.8038 55.375 27.2834 52.8697 33.9083Z" fill="black"/>
                            <path d="M32.5008 13.4848C25.4833 13.4848 19.7735 19.1939 19.7735 26.2121C19.7735 33.2304 25.4825 38.9394 32.5008 38.9394C39.519 38.9394 45.2281 33.2304 45.2281 26.2121C45.2281 19.1947 39.5182 13.4848 32.5008 13.4848ZM32.5008 34.3939C27.9894 34.3939 24.3189 30.7234 24.3189 26.212C24.3189 21.7006 27.9894 18.0301 32.5008 18.0301C37.0122 18.0301 40.6826 21.7006 40.6826 26.212C40.6826 30.7234 37.0122 34.3939 32.5008 34.3939Z" fill="black"/>
                        </svg>
                        <p class="search_filter_name">Localisation</p>
                        </div>
                        <div name="select" onclick="getMyPosition()">Autour de moi</div>
                        <select class="search_filter_country">
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                        <div class="submit-country">Appliquer ce genre</div>                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="center-title-search">
                        <svg width="25" height="30" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M55.6172 4.92188H52.6641V0H47.7422V4.92188H15.2578V0H10.3359V4.92188H7.38281C3.31193 4.92188 0 8.2338 0 12.3047V55.6172C0 59.6881 3.31193 63 7.38281 63H55.6172C59.6881 63 63 59.6881 63 55.6172V12.3047C63 8.2338 59.6881 4.92188 55.6172 4.92188ZM58.0781 55.6172C58.0781 56.9741 56.9741 58.0781 55.6172 58.0781H7.38281C6.02585 58.0781 4.92188 56.9741 4.92188 55.6172V23.1328H58.0781V55.6172ZM58.0781 18.2109H4.92188V12.3047C4.92188 10.9477 6.02585 9.84375 7.38281 9.84375H10.3359V14.7656H15.2578V9.84375H47.7422V14.7656H52.6641V9.84375H55.6172C56.9741 9.84375 58.0781 10.9477 58.0781 12.3047V18.2109Z" fill="black"/>
                            <path d="M14.2734 28.3008H9.35156V33.2227H14.2734V28.3008Z" fill="black"/>
                            <path d="M24.1172 28.3008H19.1953V33.2227H24.1172V28.3008Z" fill="black"/>
                            <path d="M33.9609 28.3008H29.0391V33.2227H33.9609V28.3008Z" fill="black"/>
                            <path d="M43.8047 28.3008H38.8828V33.2227H43.8047V28.3008Z" fill="black"/>
                            <path d="M53.6484 28.3008H48.7266V33.2227H53.6484V28.3008Z" fill="black"/>
                            <path d="M14.2734 38.1445H9.35156V43.0664H14.2734V38.1445Z" fill="black"/>
                            <path d="M24.1172 38.1445H19.1953V43.0664H24.1172V38.1445Z" fill="black"/>
                            <path d="M33.9609 38.1445H29.0391V43.0664H33.9609V38.1445Z" fill="black"/>
                            <path d="M43.8047 38.1445H38.8828V43.0664H43.8047V38.1445Z" fill="black"/>
                            <path d="M14.2734 47.9883H9.35156V52.9102H14.2734V47.9883Z" fill="black"/>
                            <path d="M24.1172 47.9883H19.1953V52.9102H24.1172V47.9883Z" fill="black"/>
                            <path d="M33.9609 47.9883H29.0391V52.9102H33.9609V47.9883Z" fill="black"/>
                            <path d="M43.8047 47.9883H38.8828V52.9102H43.8047V47.9883Z" fill="black"/>
                            <path d="M53.6484 38.1445H48.7266V43.0664H53.6484V38.1445Z" fill="black"/>
                        </svg>
                        <p class="search_filter_name filter">Date</p>  
                        </div>
                        <div>
                        <input class="select-date" type="date"/>       
                        <div class="submit-date">Appliquer cette date</div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="loader_container">
    <div>
        <img src="assets/images/loader.gif" alt="loader"/>
    </div>
</div>
<div class="event_container"> 
    <?php 
    if(empty($resultFilter->_embedded))
    {
        $error = true;
        echo 'Aucun résultat, veuillez changez votre recherche';
    }
    else
    {
    foreach($resultFilter->_embedded->events as $event): 
        $eroror = false;
    ?>
    <div class="event_card">
        <div class="card_first_part">
            <img src="<?= $event->images[5]->url ?>">
        </div>
        <div class="card_second_part">
            <div class="card_date">
                <p class="card_date_hours"><?= !empty($event->dates->start->localDate) ? date("d M Y", strtotime($event->dates->start->localDate)) : '' ?></p>
                <p class="card_date_grey"><?= !empty($event->dates->start->localTime) ? date("H:i", strtotime($event->dates->start->localTime)) : '' ?></p>
            </div>
            <div class="card_price">
                <p class="card_price_grey"><?= !empty($event->priceRanges[0]->currency) && !empty($event->priceRanges[0]->min) && !empty($event->priceRanges[0]->max) ? $event->priceRanges[0]->currency .' '. $event->priceRanges[0]->min .'-'. $event->priceRanges[0]->max : ''?></p>
            </div>
        </div>
        <div class="card_third_part">
            <div class="card_info">
                <p class="card_name"><?= $event->name ?></p>
                <p class="card_location"><?= $event->_embedded->venues[0]->city->name .','. $event->_embedded->venues[0]->country->name?></p>
            </div>
            <div class="card_checkout">
                <a href=<?= 'event/'.$event->id ?>>Détails ></a>
            </div>
        </div>  
    </div>
    <?php endforeach; } ?>
    </div>
    <div class="pagination_container">
        <?php
    
            $temp = preg_match("/^https:(.*)/", "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], $lien);
    
            $urlClean = shapeSpace_remove_var($lien[0], 'page');
            $pageActual;
            if(!empty($_GET['page']))
            {
                $pageActual = $_GET['page'];
                $pageActual = (int)$pageActual;
                if($pageActual < 1)
                {
                    $pageActual = 1;
                }
    
            }
            else 
            {
                $pageActual = 1;
            }
            if(isset($error)) {

                if(!($error)) {
                    if(!empty($_GET['page'])){
                        if ($pageActual >= 1):
                            ?><a href="<?= $urlClean .'&page='. strval($pageActual-1); ?>">Page précédente</a>  | <?php
                        endif;
                    }
            }
            ?><a href="<?= $urlClean .'&page='. strval($pageActual+1); ?>">Page suivante</a><?php
        }?>
    </div>

<?php include './partials/footer.php' ?>
