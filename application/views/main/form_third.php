<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 29-Dec-18
 * Time: 12:04 AM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0080)https://www.evisaonline.org.in/index.php/welcomevisa/form_for_visa_step3/BOL5320 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa3_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa3_files/jquery-ui.css">
    <link href="<?=THEME?>custom/Apply for Visa3_files/form.css" rel="stylesheet" type="text/css">
    <style>
        [class*='col-'] {
            float: left;
        }
        @media (max-width: 600px){
            .col-31{
                text-align: center;
                width: 100%;
            }
            .col-32, .col-33, .col-312{
                display: block;
                margin: 0 auto;
                width:90%;
                text-align: center;
            }
        }
    </style>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript" async="" src="<?=THEME?>custom/Apply for Visa3_files/analytics.js.download"></script><script async="" src="<?=THEME?>custom/Apply for Visa3_files/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5aa425904b401e45400d9a38/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!--Google Analytices Script-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="<?=THEME?>custom/Apply for Visa3_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110581702-2');
    </script>

    <!--End-->
    <script> var base_url = 'https://www.evisaonline.org.in/';</script>
    <style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#IHd9eAq-1546020199539{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;}#sOPnvdX-1546020199540.open{animation : tawkMaxOpen .25s ease!important;}</style></head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<form method="post" action="<?=CTRL?>Visa/apply_third/<?php echo $this->uri->segment('3'); ?>" autocomplete="off" onsubmit="return validate_basic_details_form(3);">
    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.evisaonline.org.in/">
                <img src="<?=THEME?>custom/Apply for Visa3_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Applicant Details Form <div style="float:right;margin-right:10px;"> <a href="https://www.evisaonline.org.in/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa3_files/Home_2.png"></a> </div>
        </div>
        <div class="text_left text_bold" style="font-size: 1.2em">
            <span>Port of Arrival : <span style="color:#A30B18"><?php echo $appdata[0]['port_of_arrival']; ?></span></span>
            <!--span >Indian Mission <span style="color:#A30B18"><--s:property value="#session.missionName"/></span></span-->
            <hr style="border:none;height:1px">
            <span>Data saved Successfully.Please note down the Temporary Application ID :  <span style="color:#d6262c"><?php echo $appdata[0]['application_num']; ?></span></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-11">Applicant Details</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Type Of Visa </div>
                <div class="col-32">
                    <input name="visa_type" value="<?php echo $appdata[0]['e_visatype']; ?>" readonly="" disabled="" type="text" maxlength="50" id="visa_type ">
                </div>
                <div class="col-33" style="color:#A30B18">Type Of Visa</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Duration Of Visa(In Days)</div>
                <div class="col-32"><input value="60" type="text" maxlength="50" readonly="" disabled="">
                    <input name="visa_duration" value="60" type="hidden" maxlength="50" id="visa_duration"></div>
                <div class="col-33" style="color:#A30B18">Duration Of Visa(In Days)</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">No. Of Entries</div>
                <div class="col-32">
                    <input type="text" value="Double" readonly="" disabled="">
                    <input type="hidden" name="no_of_entries" class="form-control" value="Double">
                </div>
                <div class="col-33" style="color:#A30B18">No. Of Entries.</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Port Of Arrival in India</div>
                <div class="col-32">
                    <select name="port_of_arrival" required="required">
                        <option value="<?php echo $appdata[0]['port_of_arrival']; ?>"><?php echo $appdata[0]['port_of_arrival']; ?></option>
                        <option value="AHMEDABAD AIRPORT"> AHMEDABAD AIRPORT</option>
                        <option value="AMRITSAR AIRPORT"> AMRITSAR AIRPORT</option>
                        <option value="BAGDOGRA AIRPORT"> BAGDOGRA AIRPORT</option>
                        <option value="BENGALURU AIRPORT"> BENGALURU AIRPORT</option>
                        <option value="CALICUT AIRPORT"> CALICUT AIRPORT</option>
                        <option value="CHANDIGARH AIRPORT"> CHANDIGARH AIRPORT</option>
                        <option value="CHENNAI AIRPORT"> CHENNAI AIRPORT</option>
                        <option value="COCHIN AIRPORT"> COCHIN AIRPORT</option>
                        <option value="COCHIN SEAPORT"> COCHIN SEAPORT</option>
                        <option value="COIMBATORE AIRPORT"> COIMBATORE AIRPORT</option>
                        <option value="DELHI AIRPORT"> DELHI AIRPORT</option>
                        <option value="GAYA AIRPORT"> GAYA AIRPORT</option>
                        <option value="GOA AIRPORT"> GOA AIRPORT</option>
                        <option value="GOA SEAPORT"> GOA SEAPORT</option>
                        <option value="GUWAHATI AIRPORT"> GUWAHATI AIRPORT</option>
                        <option value="HYDERABAD AIRPORT"> HYDERABAD AIRPORT</option>
                        <option value="JAIPUR AIRPORT"> JAIPUR AIRPORT</option>
                        <option value="KOLKATA AIRPORT"> KOLKATA AIRPORT</option>
                        <option value="LUCKNOW AIRPORT"> LUCKNOW AIRPORT</option>
                        <option value="MANGALORE AIRPORT"> MANGALORE AIRPORT</option>
                        <option value="MANGALORE SEAPORT"> MANGALORE SEAPORT</option>
                        <option value="MUMBAI AIRPORT"> MUMBAI AIRPORT</option>
                        <option value="NAGPUR AIRPORT"> NAGPUR AIRPORT</option>
                        <option value="PUNE AIRPORT"> PUNE AIRPORT</option>
                        <option value="TIRUCHIRAPALLI AIRPORT"> TIRUCHIRAPALLI AIRPORT</option>
                        <option value="TRIVANDRUM AIRPORT"> TRIVANDRUM AIRPORT</option>
                        <option value="VARANASI AIRPORT"> VARANASI AIRPORT</option>
                        <option value="VISHAKHAPATNAM  AIRPORT"> VISHAKHAPATNAM  AIRPORT</option>

                    </select>
                </div>
                <div class="col-33">Port Of Arrival in India</div>
            </div>
            <div class="row">
                <div class="col-11">Address Details</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">House No./Street</div>
                <div class="col-32">
                    <input name="house_no" type="text" id="house_no" value="<?php echo $appdata[0]['house_no']; ?>" maxlength="30" required="required">
                </div>
                <div class="col-33">House No./Street</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Village/Town/City</div>
                <div class="col-32"><input name="vill_town" type="text" id="vill_towm" maxlength="35" value="<?php echo $appdata[0]['vill_town']; ?>" required="required">   </div>
                <div class="col-33">Village/Town/City</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">State/Province/State </div>
                <div class="col-32">
                    <input name="state" type="text" id="state" maxlength="35" value="<?php echo $appdata[0]['state']; ?>" required="required">
                </div>
                <div class="col-33">State/Province/State</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Postal/Zip Code</div>
                <div class="col-32 text_bold">
                    <input name="zip_code" type="text" id="zip_code" maxlength="35" value="<?php echo $appdata[0]['zip_code']; ?>" required="required">
                </div>
                <div class="col-33">Postal/Zip Code</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Country </div>
                <div class="col-32">
                    <select name="add_country" id="add_country" required="required">
                        <option value="<?php echo $appdata[0]['add_country']; ?>"><?php if($appdata[0]['add_country']=="") echo "Select Country"; else echo $appdata[0]['add_country']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Country</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Email</div>
                <div class="col-32 text_bold">
                    <input name="emailid" type="text" id="emailid" maxlength="35" value="<?php echo $appdata[0]['email_id']; ?>" disabled="" readonly="">
                </div>
                <div class="col-33">Email</div>
            </div>
            <div class="row">
                <div class="col-31 ">Phone No</div>
                <div class="col-32 text_bold">
                    <input name="telephone_no" type="text" id="telephone_no" maxlength="35" value="<?php echo $appdata[0]['telephone_no']; ?>" disabled="" readonly="">
                </div>
                <div class="col-33">Phone No</div>
            </div>
            <div class="row">
                <div class="col-31">Mobile No</div>
                <div class="col-32 text_bold">
                    <input name="moblie_no" type="text" id="mobile_no" maxlength="35" value="<?php echo $appdata[0]['mobile_no']; ?>">
                </div>
                <div class="col-33">Mobile No</div>
            </div>
            <div class="row">
                <div class="col-11">Family Details</div>
            </div>
            <div class="row"><div class="center">Father's Details</div></div>
            <div class="row">
                <div class="col-31 mandatory">Enter Father Name</div>
                <div class="col-32">
                    <input name="father_name" maxlength="100" type="text" id="father_name" value="<?php echo $appdata[0]['father_name']; ?>" required="required">   </div>
                <div class="col-33">Enter Father Name </div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Nationality </div>
                <div class="col-32">
                    <select name="father_nationality" required="required">
                        <option value="<?php echo $appdata[0]['father_nationality']; ?>"><?php if($appdata[0]['father_nationality']=="") echo "Select..."; else echo $appdata[0]['father_nationality']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Nationality</div>
            </div>

            <div class="row">
                <div class="col-31">Previous Nationality</div>
                <div class="col-32">
                    <select name="father_pnationality">
                        <option value="<?php echo $appdata[0]['father_pnationality']; ?>"><?php if($appdata[0]['father_pnationality']=="") echo "Select..."; else echo $appdata[0]['father_pnationality']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Previous Nationality</div>
            </div>

            <div class="row">
                <div class="col-31 mandatory">Place Of Birth</div>
                <div class="col-32">
                    <input name="father_birthplace" maxlength="14" type="text" id="father_birthplace" value="<?php echo $appdata[0]['father_birthplace']; ?>" required="required">   </div>
                <div class="col-33">Place Of Birth</div>
            </div>

            <div class="row">
                <div class="col-31">Country of Birth</div>
                <div class="col-32">
                    <select name="father_bcountry" required="required">
                        <option value="<?php echo $appdata[0]['father_bcountry']; ?>"><?php if($appdata[0]['father_bcountry']=="") echo "Select..."; else echo $appdata[0]['father_bcountry']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Country of Birth</div>
            </div>

            <div class="row"><div class="center">Mother's Details</div></div>
            <div class="row">
                <div class="col-31 mandatory">Enter Mother Name</div>
                <div class="col-32">
                    <input name="mother_name" maxlength="100" type="text" id="mother_name" value="<?php echo $appdata[0]['mother_name']; ?>" required="required">   </div>
                <div class="col-33">Enter Mother Name </div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Nationality </div>
                <div class="col-32">
                    <select name="mother_nationality" required="required">
                        <option value="<?php echo $appdata[0]['mother_nationality']; ?>"><?php if($appdata[0]['mother_nationality']=="") echo "Select..."; else echo $appdata[0]['mother_nationality']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Nationality</div>
            </div>

            <div class="row">
                <div class="col-31">Previous Nationality</div>
                <div class="col-32">
                    <select name="mother_pnationality">
                        <option value="<?php echo $appdata[0]['mother_pnationality']; ?>"><?php if($appdata[0]['mother_pnationality']=="") echo "Select..."; else echo $appdata[0]['mother_pnationality']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Previous Nationality</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Place Of Birth</div>
                <div class="col-32">
                    <input name="mother_birthplace" maxlength="14" type="text" id="mother_birthplace" value="<?php echo $appdata[0]['mother_birthplace']; ?>" required="required">   </div>
                <div class="col-33">Place Of Birth</div>
            </div>

            <div class="row">
                <div class="col-31">Country of Birth</div>
                <div class="col-32">
                    <select name="mother_bcountry" required="required">
                        <option value="<?php echo $appdata[0]['mother_bcountry']; ?>"><?php if($appdata[0]['mother_bcountry']=="") echo "Select..."; else echo $appdata[0]['mother_bcountry']; ?></option>

                        <option value="Afghanistan">Afghanistan</option>

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

                        <option value="Cook Islands">Cook Islands</option>

                        <option value="Costa Rica">Costa Rica</option>

                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                        <option value="Cuba">Cuba</option>

                        <option value="Cyprus">Cyprus</option>

                        <option value="Czech Republic">Czech Republic</option>

                        <option value="Denmark">Denmark</option>

                        <option value="Djibouti">Djibouti</option>

                        <option value="Dominica">Dominica</option>

                        <option value="Dominican Republic">Dominican Republic</option>

                        <option value="East Timor">East Timor</option>

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

                        <option value="France, Metropolitan">France, Metropolitan</option>

                        <option value="French Guiana">French Guiana</option>

                        <option value="French Polynesia">French Polynesia</option>

                        <option value="French Southern Territories">French Southern Territories</option>

                        <option value="Gabon">Gabon</option>

                        <option value="Gambia">Gambia</option>

                        <option value="Georgia">Georgia</option>

                        <option value="Germany">Germany</option>

                        <option value="Ghana">Ghana</option>

                        <option value="Gibraltar">Gibraltar</option>

                        <option value="Guernsey">Guernsey</option>

                        <option value="Greece">Greece</option>

                        <option value="Greenland">Greenland</option>

                        <option value="Grenada">Grenada</option>

                        <option value="Guadeloupe">Guadeloupe</option>

                        <option value="Guam">Guam</option>

                        <option value="Guatemala">Guatemala</option>

                        <option value="Guinea">Guinea</option>

                        <option value="Guinea-Bissau">Guinea-Bissau</option>

                        <option value="Guyana">Guyana</option>

                        <option value="Haiti">Haiti</option>

                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                        <option value="Honduras">Honduras</option>

                        <option value="Hong Kong">Hong Kong</option>

                        <option value="Hungary">Hungary</option>

                        <option value="Iceland">Iceland</option>

                        <option value="India">India</option>

                        <option value="Isle of Man">Isle of Man</option>

                        <option value="Indonesia">Indonesia</option>

                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                        <option value="Iraq">Iraq</option>

                        <option value="Ireland">Ireland</option>

                        <option value="Israel">Israel</option>

                        <option value="Italy">Italy</option>

                        <option value="Ivory Coast">Ivory Coast</option>

                        <option value="Jersey">Jersey</option>

                        <option value="Jamaica">Jamaica</option>

                        <option value="Japan">Japan</option>

                        <option value="Jordan">Jordan</option>

                        <option value="Kazakhstan">Kazakhstan</option>

                        <option value="Kenya">Kenya</option>

                        <option value="Kiribati">Kiribati</option>

                        <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                        <option value="Korea, Republic of">Korea, Republic of</option>

                        <option value="Kosovo">Kosovo</option>

                        <option value="Kuwait">Kuwait</option>

                        <option value="Kyrgyzstan">Kyrgyzstan</option>

                        <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                        <option value="Latvia">Latvia</option>

                        <option value="Lebanon">Lebanon</option>

                        <option value="Lesotho">Lesotho</option>

                        <option value="Liberia">Liberia</option>

                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                        <option value="Liechtenstein">Liechtenstein</option>

                        <option value="Lithuania">Lithuania</option>

                        <option value="Luxembourg">Luxembourg</option>

                        <option value="Macau">Macau</option>

                        <option value="Macedonia">Macedonia</option>

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

                        <option value="Palau">Palau</option>

                        <option value="Palestine">Palestine</option>

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

                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                        <option value="Spain">Spain</option>

                        <option value="Sri Lanka">Sri Lanka</option>

                        <option value="St. Helena">St. Helena</option>

                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                        <option value="Sudan">Sudan</option>

                        <option value="Suriname">Suriname</option>

                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                        <option value="Swaziland">Swaziland</option>

                        <option value="Sweden">Sweden</option>

                        <option value="Switzerland">Switzerland</option>

                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                        <option value="Taiwan">Taiwan</option>

                        <option value="Tajikistan">Tajikistan</option>

                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                        <option value="Thailand">Thailand</option>

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

                        <option value="United States minor outlying islands">United States minor outlying islands</option>

                        <option value="Uruguay">Uruguay</option>

                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>

                        <option value="Vatican City State">Vatican City State</option>

                        <option value="Venezuela">Venezuela</option>

                        <option value="Vietnam">Vietnam</option>

                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                        <option value="Western Sahara">Western Sahara</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Yugoslavia">Yugoslavia</option>

                        <option value="Zaire">Zaire</option>

                        <option value="Zambia">Zambia</option>

                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Country of Birth</div>
            </div>

            <div class="row">
                <div class="col-11">Applicant Details</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Applicant's Marital Status</div>
                <div class="col-32">
                    <select name="marital_status" id="marital_status" required="">
                        <option value="<?php echo $appdata[0]['marital_status']; ?>"><?php if($appdata[0]['marital_status']=="") echo "Select..."; else echo $appdata[0]['marital_status']; ?></option>
                        <option value="Single" >Single</option>
                        <option value="Married">Married</option>
                    </select>
                </div>
                <div class="col-33">Applicant's Marital Status</div>
            </div>
            <div class="row">
                <div class="col-31 ">Were your Grandfather/Grandmother(paternal/maternal) Pakistan National or Belong to Pakistan?</div>
                <div class="col-32">
                    <label class="radio-inline">
                        <input type="radio" name="pak_vak" value="1" onclick="check_nationality(1);">
                        Yes </label>
                    <label class="radio-inline">
                        <input type="radio" name="pak_vak" value="0" checked onclick="check_nationality(0);">
                        No </label> </div>
                <div class="col-33"></div>
            </div>
            <div class="row" id="pak_naltionality" style="display:none;">
                <div class="col-31"></div>
                <div class="col-32">
                    <input type="text" name="pak_naltional" id="pak_naltional" placeholder="if yes,please give detail." value="<?php echo $appdata[0]['pak_naltional']; ?>"></div>
                <div class="col-33"></div>
            </div>
            <div id="spouse_details" <?php if($appdata[0]['marital_status']=="Single"){?>style="display:none;"<?php } ?>>
                <div class="row">
                    <div class="col-11">Spouse's Details</div>
                </div>
                <div class="row">
                    <div class="col-31 mandatory">Name</div>
                    <div class="col-32">
                        <input type="text" name="spouse_name" id="spouse_name" value="<?php echo $appdata[0]['spouse_name']; ?>"></div>
                    <div class="col-33"></div>
                </div>
                <div class="row">
                    <div class="col-31 mandatory">Nationality</div>
                    <div class="col-32">
                        <select name="spouse_nationality" id="spouse_nationality">
                            <option value="<?php echo $appdata[0]['spouse_nationality']; ?>"><?php if($appdata[0]['spouse_nationality']=="") echo "Select..."; else echo $appdata[0]['spouse_nationality']; ?></option>

                            <option value="Afghanistan">Afghanistan</option>

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

                            <option value="Cook Islands">Cook Islands</option>

                            <option value="Costa Rica">Costa Rica</option>

                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                            <option value="Cuba">Cuba</option>

                            <option value="Cyprus">Cyprus</option>

                            <option value="Czech Republic">Czech Republic</option>

                            <option value="Denmark">Denmark</option>

                            <option value="Djibouti">Djibouti</option>

                            <option value="Dominica">Dominica</option>

                            <option value="Dominican Republic">Dominican Republic</option>

                            <option value="East Timor">East Timor</option>

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

                            <option value="France, Metropolitan">France, Metropolitan</option>

                            <option value="French Guiana">French Guiana</option>

                            <option value="French Polynesia">French Polynesia</option>

                            <option value="French Southern Territories">French Southern Territories</option>

                            <option value="Gabon">Gabon</option>

                            <option value="Gambia">Gambia</option>

                            <option value="Georgia">Georgia</option>

                            <option value="Germany">Germany</option>

                            <option value="Ghana">Ghana</option>

                            <option value="Gibraltar">Gibraltar</option>

                            <option value="Guernsey">Guernsey</option>

                            <option value="Greece">Greece</option>

                            <option value="Greenland">Greenland</option>

                            <option value="Grenada">Grenada</option>

                            <option value="Guadeloupe">Guadeloupe</option>

                            <option value="Guam">Guam</option>

                            <option value="Guatemala">Guatemala</option>

                            <option value="Guinea">Guinea</option>

                            <option value="Guinea-Bissau">Guinea-Bissau</option>

                            <option value="Guyana">Guyana</option>

                            <option value="Haiti">Haiti</option>

                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                            <option value="Honduras">Honduras</option>

                            <option value="Hong Kong">Hong Kong</option>

                            <option value="Hungary">Hungary</option>

                            <option value="Iceland">Iceland</option>

                            <option value="India">India</option>

                            <option value="Isle of Man">Isle of Man</option>

                            <option value="Indonesia">Indonesia</option>

                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                            <option value="Iraq">Iraq</option>

                            <option value="Ireland">Ireland</option>

                            <option value="Israel">Israel</option>

                            <option value="Italy">Italy</option>

                            <option value="Ivory Coast">Ivory Coast</option>

                            <option value="Jersey">Jersey</option>

                            <option value="Jamaica">Jamaica</option>

                            <option value="Japan">Japan</option>

                            <option value="Jordan">Jordan</option>

                            <option value="Kazakhstan">Kazakhstan</option>

                            <option value="Kenya">Kenya</option>

                            <option value="Kiribati">Kiribati</option>

                            <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                            <option value="Korea, Republic of">Korea, Republic of</option>

                            <option value="Kosovo">Kosovo</option>

                            <option value="Kuwait">Kuwait</option>

                            <option value="Kyrgyzstan">Kyrgyzstan</option>

                            <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                            <option value="Latvia">Latvia</option>

                            <option value="Lebanon">Lebanon</option>

                            <option value="Lesotho">Lesotho</option>

                            <option value="Liberia">Liberia</option>

                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                            <option value="Liechtenstein">Liechtenstein</option>

                            <option value="Lithuania">Lithuania</option>

                            <option value="Luxembourg">Luxembourg</option>

                            <option value="Macau">Macau</option>

                            <option value="Macedonia">Macedonia</option>

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

                            <option value="Palau">Palau</option>

                            <option value="Palestine">Palestine</option>

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

                            <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                            <option value="Spain">Spain</option>

                            <option value="Sri Lanka">Sri Lanka</option>

                            <option value="St. Helena">St. Helena</option>

                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                            <option value="Sudan">Sudan</option>

                            <option value="Suriname">Suriname</option>

                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                            <option value="Swaziland">Swaziland</option>

                            <option value="Sweden">Sweden</option>

                            <option value="Switzerland">Switzerland</option>

                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                            <option value="Taiwan">Taiwan</option>

                            <option value="Tajikistan">Tajikistan</option>

                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                            <option value="Thailand">Thailand</option>

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

                            <option value="United States minor outlying islands">United States minor outlying islands</option>

                            <option value="Uruguay">Uruguay</option>

                            <option value="Uzbekistan">Uzbekistan</option>

                            <option value="Vanuatu">Vanuatu</option>

                            <option value="Vatican City State">Vatican City State</option>

                            <option value="Venezuela">Venezuela</option>

                            <option value="Vietnam">Vietnam</option>

                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                            <option value="Western Sahara">Western Sahara</option>

                            <option value="Yemen">Yemen</option>

                            <option value="Yugoslavia">Yugoslavia</option>

                            <option value="Zaire">Zaire</option>

                            <option value="Zambia">Zambia</option>

                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div><div class="col-33"></div>
                </div>

                <div class="row">
                    <div class="col-31 ">Previous Nationality</div>
                    <div class="col-32">
                        <select name="spouse_pnationality" id="spouse_pnationality">
                            <option value="<?php echo $appdata[0]['spouse_pnationality']; ?>"><?php if($appdata[0]['spouse_pnationality']=="") echo "Select..."; else echo $appdata[0]['spouse_pnationality']; ?></option>

                            <option value="Afghanistan">Afghanistan</option>

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

                            <option value="Cook Islands">Cook Islands</option>

                            <option value="Costa Rica">Costa Rica</option>

                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                            <option value="Cuba">Cuba</option>

                            <option value="Cyprus">Cyprus</option>

                            <option value="Czech Republic">Czech Republic</option>

                            <option value="Denmark">Denmark</option>

                            <option value="Djibouti">Djibouti</option>

                            <option value="Dominica">Dominica</option>

                            <option value="Dominican Republic">Dominican Republic</option>

                            <option value="East Timor">East Timor</option>

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

                            <option value="France, Metropolitan">France, Metropolitan</option>

                            <option value="French Guiana">French Guiana</option>

                            <option value="French Polynesia">French Polynesia</option>

                            <option value="French Southern Territories">French Southern Territories</option>

                            <option value="Gabon">Gabon</option>

                            <option value="Gambia">Gambia</option>

                            <option value="Georgia">Georgia</option>

                            <option value="Germany">Germany</option>

                            <option value="Ghana">Ghana</option>

                            <option value="Gibraltar">Gibraltar</option>

                            <option value="Guernsey">Guernsey</option>

                            <option value="Greece">Greece</option>

                            <option value="Greenland">Greenland</option>

                            <option value="Grenada">Grenada</option>

                            <option value="Guadeloupe">Guadeloupe</option>

                            <option value="Guam">Guam</option>

                            <option value="Guatemala">Guatemala</option>

                            <option value="Guinea">Guinea</option>

                            <option value="Guinea-Bissau">Guinea-Bissau</option>

                            <option value="Guyana">Guyana</option>

                            <option value="Haiti">Haiti</option>

                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                            <option value="Honduras">Honduras</option>

                            <option value="Hong Kong">Hong Kong</option>

                            <option value="Hungary">Hungary</option>

                            <option value="Iceland">Iceland</option>

                            <option value="India">India</option>

                            <option value="Isle of Man">Isle of Man</option>

                            <option value="Indonesia">Indonesia</option>

                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                            <option value="Iraq">Iraq</option>

                            <option value="Ireland">Ireland</option>

                            <option value="Israel">Israel</option>

                            <option value="Italy">Italy</option>

                            <option value="Ivory Coast">Ivory Coast</option>

                            <option value="Jersey">Jersey</option>

                            <option value="Jamaica">Jamaica</option>

                            <option value="Japan">Japan</option>

                            <option value="Jordan">Jordan</option>

                            <option value="Kazakhstan">Kazakhstan</option>

                            <option value="Kenya">Kenya</option>

                            <option value="Kiribati">Kiribati</option>

                            <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                            <option value="Korea, Republic of">Korea, Republic of</option>

                            <option value="Kosovo">Kosovo</option>

                            <option value="Kuwait">Kuwait</option>

                            <option value="Kyrgyzstan">Kyrgyzstan</option>

                            <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                            <option value="Latvia">Latvia</option>

                            <option value="Lebanon">Lebanon</option>

                            <option value="Lesotho">Lesotho</option>

                            <option value="Liberia">Liberia</option>

                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                            <option value="Liechtenstein">Liechtenstein</option>

                            <option value="Lithuania">Lithuania</option>

                            <option value="Luxembourg">Luxembourg</option>

                            <option value="Macau">Macau</option>

                            <option value="Macedonia">Macedonia</option>

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

                            <option value="Palau">Palau</option>

                            <option value="Palestine">Palestine</option>

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

                            <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                            <option value="Spain">Spain</option>

                            <option value="Sri Lanka">Sri Lanka</option>

                            <option value="St. Helena">St. Helena</option>

                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                            <option value="Sudan">Sudan</option>

                            <option value="Suriname">Suriname</option>

                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                            <option value="Swaziland">Swaziland</option>

                            <option value="Sweden">Sweden</option>

                            <option value="Switzerland">Switzerland</option>

                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                            <option value="Taiwan">Taiwan</option>

                            <option value="Tajikistan">Tajikistan</option>

                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                            <option value="Thailand">Thailand</option>

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

                            <option value="United States minor outlying islands">United States minor outlying islands</option>

                            <option value="Uruguay">Uruguay</option>

                            <option value="Uzbekistan">Uzbekistan</option>

                            <option value="Vanuatu">Vanuatu</option>

                            <option value="Vatican City State">Vatican City State</option>

                            <option value="Venezuela">Venezuela</option>

                            <option value="Vietnam">Vietnam</option>

                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                            <option value="Western Sahara">Western Sahara</option>

                            <option value="Yemen">Yemen</option>

                            <option value="Yugoslavia">Yugoslavia</option>

                            <option value="Zaire">Zaire</option>

                            <option value="Zambia">Zambia</option>

                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div><div class="col-33"></div>
                </div>
                <div class="row">
                    <div class="col-31 mandatory">Place Of Birth</div>
                    <div class="col-32">
                        <input type="text" name="spouse_birthplace" id="spouse_birthplace" value="<?php echo $appdata[0]['spouse_birthplace']; ?>"></div>
                    <div class="col-33">Place Of Birth</div>
                </div>
                <div class="row">
                    <div class="col-31 mandatory">Country of Birth</div>
                    <div class="col-32">
                        <select name="spouse_bcountry" id="spouse_bcountry">
                            <option value="<?php echo $appdata[0]['spouse_bcountry']; ?>"><?php if($appdata[0]['spouse_bcountry']=="") echo "Select..."; else echo $appdata[0]['spouse_bcountry']; ?></option>

                            <option value="Afghanistan">Afghanistan</option>

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

                            <option value="Cook Islands">Cook Islands</option>

                            <option value="Costa Rica">Costa Rica</option>

                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                            <option value="Cuba">Cuba</option>

                            <option value="Cyprus">Cyprus</option>

                            <option value="Czech Republic">Czech Republic</option>

                            <option value="Denmark">Denmark</option>

                            <option value="Djibouti">Djibouti</option>

                            <option value="Dominica">Dominica</option>

                            <option value="Dominican Republic">Dominican Republic</option>

                            <option value="East Timor">East Timor</option>

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

                            <option value="France, Metropolitan">France, Metropolitan</option>

                            <option value="French Guiana">French Guiana</option>

                            <option value="French Polynesia">French Polynesia</option>

                            <option value="French Southern Territories">French Southern Territories</option>

                            <option value="Gabon">Gabon</option>

                            <option value="Gambia">Gambia</option>

                            <option value="Georgia">Georgia</option>

                            <option value="Germany">Germany</option>

                            <option value="Ghana">Ghana</option>

                            <option value="Gibraltar">Gibraltar</option>

                            <option value="Guernsey">Guernsey</option>

                            <option value="Greece">Greece</option>

                            <option value="Greenland">Greenland</option>

                            <option value="Grenada">Grenada</option>

                            <option value="Guadeloupe">Guadeloupe</option>

                            <option value="Guam">Guam</option>

                            <option value="Guatemala">Guatemala</option>

                            <option value="Guinea">Guinea</option>

                            <option value="Guinea-Bissau">Guinea-Bissau</option>

                            <option value="Guyana">Guyana</option>

                            <option value="Haiti">Haiti</option>

                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

                            <option value="Honduras">Honduras</option>

                            <option value="Hong Kong">Hong Kong</option>

                            <option value="Hungary">Hungary</option>

                            <option value="Iceland">Iceland</option>

                            <option value="India">India</option>

                            <option value="Isle of Man">Isle of Man</option>

                            <option value="Indonesia">Indonesia</option>

                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

                            <option value="Iraq">Iraq</option>

                            <option value="Ireland">Ireland</option>

                            <option value="Israel">Israel</option>

                            <option value="Italy">Italy</option>

                            <option value="Ivory Coast">Ivory Coast</option>

                            <option value="Jersey">Jersey</option>

                            <option value="Jamaica">Jamaica</option>

                            <option value="Japan">Japan</option>

                            <option value="Jordan">Jordan</option>

                            <option value="Kazakhstan">Kazakhstan</option>

                            <option value="Kenya">Kenya</option>

                            <option value="Kiribati">Kiribati</option>

                            <option value="Korea, Democratic People&#39;s Republic of">Korea, Democratic People's Republic of</option>

                            <option value="Korea, Republic of">Korea, Republic of</option>

                            <option value="Kosovo">Kosovo</option>

                            <option value="Kuwait">Kuwait</option>

                            <option value="Kyrgyzstan">Kyrgyzstan</option>

                            <option value="Lao People&#39;s Democratic Republic">Lao People's Democratic Republic</option>

                            <option value="Latvia">Latvia</option>

                            <option value="Lebanon">Lebanon</option>

                            <option value="Lesotho">Lesotho</option>

                            <option value="Liberia">Liberia</option>

                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                            <option value="Liechtenstein">Liechtenstein</option>

                            <option value="Lithuania">Lithuania</option>

                            <option value="Luxembourg">Luxembourg</option>

                            <option value="Macau">Macau</option>

                            <option value="Macedonia">Macedonia</option>

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

                            <option value="Palau">Palau</option>

                            <option value="Palestine">Palestine</option>

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

                            <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

                            <option value="Spain">Spain</option>

                            <option value="Sri Lanka">Sri Lanka</option>

                            <option value="St. Helena">St. Helena</option>

                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

                            <option value="Sudan">Sudan</option>

                            <option value="Suriname">Suriname</option>

                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

                            <option value="Swaziland">Swaziland</option>

                            <option value="Sweden">Sweden</option>

                            <option value="Switzerland">Switzerland</option>

                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                            <option value="Taiwan">Taiwan</option>

                            <option value="Tajikistan">Tajikistan</option>

                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                            <option value="Thailand">Thailand</option>

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

                            <option value="United States minor outlying islands">United States minor outlying islands</option>

                            <option value="Uruguay">Uruguay</option>

                            <option value="Uzbekistan">Uzbekistan</option>

                            <option value="Vanuatu">Vanuatu</option>

                            <option value="Vatican City State">Vatican City State</option>

                            <option value="Venezuela">Venezuela</option>

                            <option value="Vietnam">Vietnam</option>

                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

                            <option value="Western Sahara">Western Sahara</option>

                            <option value="Yemen">Yemen</option>

                            <option value="Yugoslavia">Yugoslavia</option>

                            <option value="Zaire">Zaire</option>

                            <option value="Zambia">Zambia</option>

                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div><div class="col-33"></div>
                </div>
            </div>
            <!-- Professional/Occupation Deatils of Applicant -->
            <div class="row">
                <div class="col-11">Professional/Occupation Details of Applicant</div>
            </div>
            <div class="row">
                <div class="col-31">Present Occupation</div>
                <div class="col-32">
                    <select name="present_occupation">
                        <option value="">Select</option>

                        <option value="AIR FORCE">AIR FORCE</option>

                        <option value="BUSINESS PERSON">BUSINESS PERSON</option>

                        <option value="CAMERAMAN">CAMERAMAN</option>

                        <option value="CHARITY/SOCIAL WORKER">CHARITY/SOCIAL WORKER</option>

                        <option value="CHARTERED ACCOUNTANT">CHARTERED ACCOUNTANT</option>

                        <option value="COLLEGE/UNIVERSITY TEACHER">COLLEGE/UNIVERSITY TEACHER</option>

                        <option value="DIPLOMAT">DIPLOMAT</option>

                        <option value="DOCTOR">DOCTOR</option>

                        <option value="ENGINEER">ENGINEER</option>

                        <option value="FILM PRODUCER">FILM PRODUCER</option>

                        <option value="GOVERNMENT SERVICE">GOVERNMENT SERVICE</option>

                        <option value="HOME WIFE">HOME WIFE</option>

                        <option value="JOURNALIST">JOURNALIST</option>

                        <option value="LABOUR">LABOUR</option>

                        <option value="LAWYER">LAWYER</option>

                        <option value="MEDIA">MEDIA</option>

                        <option value="MILITARY">MILITARY</option>

                        <option value="MISSIONARY">MISSIONARY</option>

                        <option value="NAVY">NAVY</option>

                        <option value="NEWS BROADCASTER">NEWS BROADCASTER</option>

                        <option value="OFFICIAL">OFFICIAL</option>

                        <option value="POLICE">POLICE</option>

                        <option value="PRESS">PRESS</option>

                        <option value="PRIVATE SERVICE">PRIVATE SERVICE</option>

                        <option value="PUBLISHER">PUBLISHER</option>

                        <option value="REPORTER">REPORTER</option>

                        <option value="RESEARCHER">RESEARCHER</option>

                        <option value="RETIRED">RETIRED</option>

                        <option value="SEA MAN">SEA MAN</option>

                        <option value="SELF EMPLOYED/ FREELANCER">SELF EMPLOYED/ FREELANCER</option>

                        <option value="TV PRODUCER">TV PRODUCER</option>

                        <option value="UN-EMPLOYED">UN-EMPLOYED</option>

                        <option value="UN OFFICIAL">UN OFFICIAL</option>

                        <option value="WORKER">WORKER</option>

                        <option value="WRITER">WRITER</option>

                        <option value="STUDENT">STUDENT</option>

                        <option value="MINOR">MINOR</option>

                        <option value="OTHERS">OTHERS</option>
                    </select>
                </div>
                <div class="col-33"></div>
            </div>
            <div class="row">
                <div class="col-31">Employer/Bussiness Name</div>
                <div class="col-32">
                    <input type="text" name="employer_name" id="employer_name" value="<?php echo $appdata[0]['employer_name']; ?>"></div>
                <div class="col-33"></div>
            </div>
            <div class="row">
                <div class="col-31">Designation</div>
                <div class="col-32">
                    <input type="text" name="emp_designation" id="emp_desigation" value="<?php echo $appdata[0]['emp_designation']; ?>"></div>
                <div class="col-33"></div>
            </div>
            <div class="row">
                <div class="col-31">Address</div>
                <div class="col-32">
                    <input type="text" name="employer_add" id="employer_add" value="<?php echo $appdata[0]['employer_add']; ?>"></div>
                <div class="col-33"></div>
            </div>
            <div class="row">
                <div class="col-31">Phone</div>
                <div class="col-32">
                    <input type="text" name="employer_phone" id="employer_phone" value="<?php echo $appdata[0]['employer_phone']; ?>"></div>
                <div class="col-33"></div>
            </div>
            <!--End -->

            <div class="row">
                <div class="col-11 text_center">
                    <input name="submit" type="submit" class="btn btn-primary" id="continue" value="Continue">
                    <input name="submit" type="submit" class="btn btn-primary" id="exit" formnovalidate="" value="Save and Temporarily Exit" title="Save and Register Later">
                </div>
            </div>
        </div>
    </div><!-- end of wrapper -->
    <!-- <input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

<script src="<?=THEME?>custom/Apply for Visa3_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa3_files/jquery-ui.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa3_files/bootstrap.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa3_files/main.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa3_files/form.js.download"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            //alert("Submitted");
        });
    });
</script>
<div id="IHd9eAq-1546020199539" class="" style="display: block !important;"><iframe id="sOPnvdX-1546020199540" src="<?=THEME?>custom/Apply for Visa3_files/saved_resource.html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; height: 520px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; display: none !important;"></iframe><iframe id="KRjdzMT-1546020199541" src="<?=THEME?>custom/Apply for Visa3_files/saved_resource(1).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 10px 0px !important; height: 60px !important; min-height: 60px !important; max-height: 60px !important; width: 60px !important; min-width: 60px !important; max-width: 60px !important; border-radius: 50% !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 20px !important; right: 20px !important; left: auto !important; display: block !important;"></iframe><iframe id="n58EYWk-1546020199541" src="<?=THEME?>custom/Apply for Visa3_files/saved_resource(2).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; top: auto !important; bottom: 60px !important; right: 15px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important; display: block !important;"></iframe><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important;"></div><div id="wdY1TjV-1546020199539" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important;"></div><div id="JFkdwr5-1546020199539" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important;"></div><div id="Hsx28PM-1546020199539" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important;"></div><iframe id="X8KMRBR-1546020199565" src="<?=THEME?>custom/Apply for Visa3_files/saved_resource(3).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; bottom: 100px !important; top: auto !important; right: 20px !important; left: auto !important; display: none !important; height: 0px !important;"></iframe></div><iframe src="<?=THEME?>custom/Apply for Visa3_files/saved_resource(4).html" title="chat widget logging" style="display: none !important;"></iframe></body></html>
