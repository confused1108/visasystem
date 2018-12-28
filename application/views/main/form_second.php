<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 28-Dec-18
 * Time: 6:10 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0080)https://www.etaonlineindia.com/index.php/welcomevisa/form_for_visa_step2/BOL5320 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa2_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa2_files/jquery-ui.css">
    <link href="<?=THEME?>custom/Apply for Visa2_files/form.css" rel="stylesheet" type="text/css">
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
    <script type="text/javascript" async="" src="<?=THEME?>custom/Apply for Visa2_files/analytics.js.download"></script><script async="" src="<?=THEME?>custom/Apply for Visa2_files/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript">
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
    <script async="" src="<?=THEME?>custom/Apply for Visa2_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110581702-2');
    </script>

    <!--End-->
    <script> var base_url = 'https://www.etaonlineindia.com/';</script>
    <style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#ZepYVG0-1545986511892{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;}#klBgevm-1545986511892.open{animation : tawkMaxOpen .25s ease!important;}</style><script async="" src="https://embed.tawk.to/5aa425904b401e45400d9a38/default?refresh=true&amp;v=632" charset="UTF-8" crossorigin="*" id="TawkScript-1545988596352"></script></head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<form method="post" action="<?=CTRL?>Visa/apply_second/<?php echo $this->uri->segment('3'); ?>" autocomplete="off" onsubmit="return validate_basic_details_form(3);">
    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.etaonlineindia.com/">
                <img src="<?=THEME?>custom/Apply for Visa2_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Applicant Details Form <div style="float:right;margin-right:10px;"> <a href="https://www.etaonlineindia.com/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa2_files/Home_2.png"></a> </div>
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
                <div class="col-31 mandatory">Application Type </div>
                <div class="col-32">
                    <select name="applicationtype" id="applicationtype" required="required" onchange="myFunction(this)">
                        <option value="">Select..</option>
                        <option value="Normal Processing" <?php if($appdata[0]['applicationtype']=="Normal Processing") echo "selected"; ?>>Normal Processing (Processing Time 4 to 7 Business days)</option>
                        <option value="Urgent Processing" <?php if($appdata[0]['applicationtype']=="Urgent Processing") echo "selected"; ?>>Urgent Processing (Processing Time 1 Business Day) </option>
                    </select>
                </div>
                <div class="col-33" style="color:#A30B18">Application Type </div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Visa Type </div>
                <div class="col-32">
                    <select name="e_visatype" required="">
                        <option value="<?php echo $appdata[0]['e_visatype']; ?>"><?php echo $appdata[0]['e_visatype']; ?></option>
                        <option value="e-Tourist Visa"> e-Tourist Visa</option>
                        <option value="e-Medical Visa"> e-Medical Visa</option>
                        <option value="e-Business Visa"> e-Business Visa</option>
                    </select>
                </div>
                <div class="col-33" style="color:#A30B18">Visa Type </div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Email </div>
                <div class="col-32"><input type="text" name="email_id" value="<?php echo $appdata[0]['email_id']; ?>" required="required">  </div>
                <div class="col-33" style="color:#A30B18">Email</div>
            </div>
            <div class="row">
                <div class="col-31">Surname </div>
                <div class="col-32"><input name="lname" value="<?php echo $appdata[0]['lname']; ?>" type="text" maxlength="50" id="lname ">   </div>
                <div class="col-33" style="color:#A30B18">Surname/Family Name </div>
            </div>
            <div class="row">
                <div class="col-31">Middle Name </div>
                <div class="col-32"><input name="mname" value="" type="text" maxlength="50" id="mname">   </div>
                <div class="col-33" style="color:#A30B18">Middle Name/Family Name </div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Given Name/s </div>
                <div class="col-32"><input name="fname" value="<?php echo $appdata[0]['fname']; ?>" type="text" maxlength="50" id="fname" required="required">   </div>
                <div class="col-33" style="color:#A30B18">Given Name/s .<br><span class="blink_text"></span></div>
            </div>
            <div class="row">
                <div class="col-312">Have you ever changed your name? If yes, click the box <input type="checkbox" id="changedSurnameCheck" style="width:auto;border:none" onclick="show_hide_prev_surname();">and give details.</div>
                <div class="col-33">If You have ever changed your Name Please tell us.</div>
            </div>
            <div class="row prev_surname_class">
                <div class="col-31 mandatory">Previous Surname</div>
                <div class="col-32"><input name="previous_surname" value="" type="text" maxlength="50" id="previous_surname">   </div>
                <div class="col-33">Previous Surname</div>
            </div>
            <div class="row prev_surname_class">
                <div class="col-31 mandatory">Previous Name</div>
                <div class="col-32"><input name="previous_name" value="" type="text" maxlength="50" id="previous_name">   </div>
                <div class="col-33">Previous given name</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Gender</div>
                <div class="col-32">
                    <select name="sex" id="sex" required="required">
                        <option value="">Select gender</option>
                        <option value="Male"> Male</option>
                        <option value="Female"> Female</option>
                        <option value="Transgender"> Transgender</option>
                    </select>
                </div>
                <div class="col-33">Gender</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Date of Birth</div>
                <div class="col-32 text_bold">
                    <input type="text" name="dob" id="dob" value="<?php echo $appdata[0]['dob']; ?>" required="" class="hasDatepicker">
                </div>
                <div class="col-33">Date of Birth as in Passport </div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Town/City of birth</div>
                <div class="col-32"><input name="birth_city" type="text" id="birth_city" value="" maxlength="50" required="required">   </div>
                <div class="col-33">Province/Town/City of birth</div>
            </div>

            <div class="row">
                <div class="col-31 mandatory">Country of birth</div>
                <div class="col-32">
                    <select name="birth_country" id="birth_country" required="required">
                        <option value=""> Select Country</option>
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
                <div class="col-33">Country of birth</div>
            </div>
            <!--<div class="row">
                <div class="col-31 mandatory">Citizenship/National Id No.</div>
                <div class="col-32"><input name="national_id" type="text" id="national_id" value="" maxlength="30">   </div>
                <div class="col-33">If not applicable Please Type NA</div>
            </div>-->
            <div class="row">
                <div class="col-31 mandatory">Religion</div>
                <div class="col-32">

                    <select name="religion" id="religion" onchange="show_religion_other()" required="required">
                        <option value="">Select Religion</option>
                        <option value="BAHAI"> BAHAI</option>
                        <option value="BUDDHISM"> BUDDHISM</option>
                        <option value="CHRISTIAN"> CHRISTIAN</option>
                        <option value="HINDU"> HINDU</option>
                        <option value="ISLAM"> ISLAM</option>
                        <option value="JUDAISM"> JUDAISM</option>
                        <option value="OTHERS"> OTHERS</option>
                        <option value="JUDAISM"> JUDAISM</option>
                        <option value="PARSI"> PARSI</option>
                        <option value="SIKH"> SIKH</option>
                        <option value="ZOROASTRIAN"> ZOROASTRIAN</option>
                    </select>
                    <!--<input name="appl.religionOther" style="display:none" type="text" id="religion_other" maxlength="20" value="">-->
                </div>
                <div class="col-33">If Others .Please specify</div>
            </div>
            <!--<div class="row">
                <div class="col-31 mandatory">Visible identification marks</div>
                <div class="col-32"><input name="appl.visual_mark" type="text" id="identity_marks" maxlength="35" value="">   </div>
                <div class="col-33">Visible identification marks</div>
            </div>-->
            <div class="row">
                <div class="col-31 mandatory">Educational Qualification </div>
                <div class="col-32">

                    <select name="education" id="education">
                        <option value="">Select Education</option>
                        <option value="BELOW MATRICULATION"> BELOW MATRICULATION</option>
                        <option value="GRADUATE"> GRADUATE</option>
                        <option value="HIGHER SECONDARY"> HIGHER SECONDARY</option>
                        <option value="ILLITERATE"> ILLITERATE</option>
                        <option value="MATRICULATION"> MATRICULATION</option>
                        <option value="NA BEING MINOR"> NA BEING MINOR</option>
                        <option value="OTHERS"> OTHERS</option>
                        <option value="POST GRADUATE"> POST GRADUATE</option>
                        <option value="PROFESSIONAL"> PROFESSIONAL</option>
                    </select>
                </div>
                <div class="col-33">Educational Qualification</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Nationality </div>
                <div class="col-32 text_bold">
                    <select name="nationality" required="required">
                        <option value="<?php echo $appdata[0]['country_code']; ?>" selected=""><?php echo $appdata[0]['country_code']; ?></option>
                        <option value="ALB-Albania">Albania</option>
                        <option value="AND-Andorra">Andorra</option>
                        <option value="AGO-Angola">Angola</option>
                        <option value="AIA-Anguilla">Anguilla</option>
                        <option value="ATG-Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                        <option value="ARG-Argentina">Argentina</option>
                        <option value="ARM-Armenia">Armenia</option>
                        <option value="ABW-Aruba">Aruba</option>
                        <option value="AUS-Australia">Australia</option>
                        <option value="AUT-Austria">Austria</option>
                        <option value="AZA-Azerbaijan">Azerbaijan</option>
                        <option value="BHS-Bahamas">Bahamas</option>
                        <option value="BRB-Barbados">Barbados</option>
                        <option value="BEL-Belgium">Belgium</option>
                        <option value="BLZ-Belize">Belize</option>
                        <option value="BOL-Bolivia">Bolivia</option>
                        <option value="BIH-Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                        <option value="BWA-Botswana">Botswana</option>
                        <option value="BRA-Brazil">Brazil</option>
                        <option value="BRN-Brunei">Brunei</option>
                        <option value="BGR-Bulgaria">Bulgaria</option>
                        <option value="BDI-Burundi">Burundi</option>
                        <option value="KHM-Cambodia">Cambodia</option>
                        <option value="CMR-Camroon Republic">Camroon Republic</option>
                        <option value="CAN-Canada">Canada</option>
                        <option value="CPV-Cape Verde">Cape Verde</option>
                        <option value="CYM-Cayman Island">Cayman Island</option>
                        <option value="CHL-Chile">Chile</option>
                        <option value="CHN-China">China</option>
                        <option value="CHN-China - Macau">China - Macau</option>
                        <option value="CHN-China- Sar Hongkong">China- Sar Hongkong</option>
                        <option value="COL-Colombia">Colombia</option>
                        <option value="COM-Comoros">Comoros</option>
                        <option value="COK-Cook Islands">Cook Islands</option>
                        <option value="CRC-Costa Rica">Costa Rica</option>
                        <option value="CIV-Cote D&#39;Ivoire">Cote D'Ivoire</option>
                        <option value="HRV-Croatia">Croatia</option>
                        <option value="CUB-Cuba">Cuba</option>
                        <option value="CYP-Cyprus">Cyprus</option>
                        <option value="CZE-Czech Republic">Czech Republic</option>
                        <option value="DNK-Denmark">Denmark</option>
                        <option value="DJI-Djibouti">Djibouti</option>
                        <option value="DMA-Dominica">Dominica</option>
                        <option value="DOM-Dominican Republic">Dominican Republic</option>
                        <option value="TMP-East Timor">East Timor</option>
                        <option value="ECU-Ecuador">Ecuador</option>
                        <option value="SLV-El Salvador">El Salvador</option>
                        <option value="ERI-Eritrea">Eritrea</option>
                        <option value="EST-Estonia">Estonia</option>
                        <option value="FJI-Fiji">Fiji</option>
                        <option value="FIN-Finland">Finland</option>
                        <option value="FRA-France">France</option>
                        <option value="GAB-Gabon">Gabon</option>
                        <option value="GMB-Gambia">Gambia</option>
                        <option value="GEO-Georgia">Georgia</option>
                        <option value="DEU-Germany">Germany</option>
                        <option value="GHA-Ghana">Ghana</option>
                        <option value="GRC-Greece">Greece</option>
                        <option value="GRD-Grenada">Grenada</option>
                        <option value="GTM-Guatemala">Guatemala</option>
                        <option value="GIN-Guinea">Guinea</option>
                        <option value="GUY-Guyana">Guyana</option>
                        <option value="HTI-Haiti">Haiti</option>
                        <option value="HND-Honduras">Honduras</option>
                        <option value="HUN-Hungary">Hungary</option>
                        <option value="IS-Iceland">Iceland</option>
                        <option value="IDN-Indonesia">Indonesia</option>
                        <option value="IRN-Iran">Iran</option>
                        <option value="IRL-Ireland">Ireland</option>
                        <option value="ISR-Israel">Israel</option>
                        <option value="ITA-Italy">Italy</option>
                        <option value="JAM-Jamaica">Jamaica</option>
                        <option value="JPN-Japan">Japan</option>
                        <option value="JOR-Jordan">Jordan</option>
                        <option value="KEN-Kenya">Kenya</option>
                        <option value="KIR-Kiribati">Kiribati</option>
                        <option value="LAO-Laos">Laos</option>
                        <option value="LVA-Latvia">Latvia</option>
                        <option value="LSO-Lesotho">Lesotho</option>
                        <option value="LBR-Liberia">Liberia</option>
                        <option value="LIE-Liechtenstein">Liechtenstein</option>
                        <option value="LTU-Lithuania">Lithuania</option>
                        <option value="LUX-Luxembourg">Luxembourg</option>
                        <option value="MKD-Macedonia">Macedonia</option>
                        <option value="MDG-Madagascar">Madagascar</option>
                        <option value="MWI-Malawi">Malawi</option>
                        <option value="MYS-Malaysia">Malaysia</option>
                        <option value="MLI-Mali">Mali</option>
                        <option value="MLT-Malta">Malta</option>
                        <option value="MHL-Marshall Islands">Marshall Islands</option>
                        <option value="MUS-Mauritius">Mauritius</option>
                        <option value="MEX-Mexico">Mexico</option>
                        <option value="FSM-Micronesia">Micronesia</option>
                        <option value="MDA-Moldova">Moldova</option>
                        <option value="MCO-Monaco">Monaco</option>
                        <option value="MNG-Mongolia">Mongolia</option>
                        <option value="MNE-Montenegro">Montenegro</option>
                        <option value="MSR-Montserrat">Montserrat</option>
                        <option value="MOZ-Mozambique">Mozambique</option>
                        <option value="MMR-Myanmar">Myanmar</option>
                        <option value="NAM-Namibia">Namibia</option>
                        <option value="NRU-Nauru">Nauru</option>
                        <option value="NLD-Netherlands">Netherlands</option>
                        <option value="NZL-New Zealand">New Zealand</option>
                        <option value="NIC-Nicaragua">Nicaragua</option>
                        <option value="NGA-Niger Republic">Niger Republic</option>
                        <option value="NIU-Niue Island">Niue Island</option>
                        <option value="NOR-Norway">Norway</option>
                        <option value="OMN-Oman">Oman</option>
                        <option value="PLW-Palau">Palau</option>
                        <option value="PSE-Palestine">Palestine</option>
                        <option value="PAN-Panama">Panama</option>
                        <option value="PNG-Papua New Guinea">Papua New Guinea</option>
                        <option value="PRY-Paraguay">Paraguay</option>
                        <option value="PER-Peru">Peru</option>
                        <option value="PHL-Philippines">Philippines</option>
                        <option value="POL-Poland">Poland</option>
                        <option value="PRT-Portugal">Portugal</option>
                        <option value="QTR-Qatar">Qatar</option>
                        <option value="KOR-Republic Of Korea">Republic Of Korea</option>
                        <option value="ROU-Romania">Romania</option>
                        <option value="RUS-Russia">Russia</option>
                        <option value="RWA-Rwanda">Rwanda</option>
                        <option value="BLM-Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                        <option value="LCA-Saint Lucia">Saint Lucia</option>
                        <option value="VCT-Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                        <option value="WSM-Samoa">Samoa</option>
                        <option value="SMR-San Marino">San Marino</option>
                        <option value="SEN-Senegal">Senegal</option>
                        <option value="SRB-Serbia">Serbia</option>
                        <option value="SYC-Seychelles">Seychelles</option>
                        <option value="SLE-Sierra Leone">Sierra Leone</option>
                        <option value="SGP-Singapore">Singapore</option>
                        <option value="SVK-Slovakia">Slovakia</option>
                        <option value="SVN-Slovenia">Slovenia</option>
                        <option value="SLB-Solomon Islands">Solomon Islands</option>
                        <option value="ZAF-South Africa">South Africa</option>
                        <option value="ESP-Spain">Spain</option>
                        <option value="LKA-Sri Lanka">Sri Lanka</option>
                        <option value="SUR-Suriname">Suriname</option>
                        <option value="SWZ-Swaziland">Swaziland</option>
                        <option value="SWE-Sweden">Sweden</option>
                        <option value="CHE-Switzerland">Switzerland</option>
                        <option value="TWN-Taiwan">Taiwan</option>
                        <option value="TJK-Tajikistan">Tajikistan</option>
                        <option value="TZA-Tanzania">Tanzania</option>
                        <option value="THA-Thailand">Thailand</option>
                        <option value="TON-Tonga">Tonga</option>
                        <option value="TGO-Trinidad And Tobago">Trinidad And Tobago</option>
                        <option value="TCA-Turks And Caicos Isl">Turks And Caicos Isl</option>
                        <option value="TUV-Tuvalu">Tuvalu</option>
                        <option value="UGA-Uganda">Uganda</option>
                        <option value="UKR-Ukraine">Ukraine</option>
                        <option value="ARE-United Arab Emirates">United Arab Emirates</option>
                        <option value="GBR-United Kingdom">United Kingdom</option>
                        <option value="USA-United States Of America">United States Of America</option>
                        <option value="URY-Uruguay">Uruguay</option>
                        <option value="UZB-Uzbekistan">Uzbekistan</option>
                        <option value="VUT-Vanuatu">Vanuatu</option>
                        <option value="VAT-Vatican City - Holy See">Vatican City - Holy See</option>
                        <option value="VEN-Venezuela">Venezuela</option>
                        <option value="VNM-Vietnam">Vietnam</option>
                        <option value="ZMB-Zambia">Zambia</option>
                        <option value="ZWE-Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="col-33">Nationality</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Did you acquire Nationality by birth or by naturalization? </div>
                <div class="col-32">
                    <select name="acquire_nationality" id="" required="required">
                        <option value="">Select One</option>
                        <option value="By Birth">By Birth</option>
                        <option value="Naturalization">Naturalization</option>
                    </select>
                </div>
                <div class="col-33">Did you acquire Nationality by birth or by naturalization?</div>
            </div>

            <div class="row">
                <div class="col-312">Have you lived for at least two years in the country where you are applying visa?
                    <input type="radio" id="refer_flag1" style="width:auto;border: none" value="1" name="apply_visa">Yes
                    <input type="radio" id="refer_flag2" style="width:auto;border: none" value="0" name="apply_visa">No
                </div>
                <div class="col-33"></div>
            </div>


            <div class="row">
                <div class="col-11">Passport Details</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Passport Number </div>
                <div class="col-32">
                    <input name="passport_no" maxlength="14" type="text" id="passport_no" value="<?php echo $appdata[0]['passport_no']; ?>" required="required">   </div>
                <div class="col-33">Applicant's Passport Number</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Place of Issue </div>
                <div class="col-32">
                    <input name="passport_place_of_issue" maxlength="20" type="text" id="passport_issue_place" value="" required="required">
                </div>
                <div class="col-33">Place of Issue</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Date of Issue </div>
                <div class="col-32">
                    <div class="form-row show-inputbtns">
                        <input name="passport_date_issue" type="text" data-date-inline-picker="false" data-date-open-on-focus="true" maxlength="10" id="passport_date_issue" value="" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}" required="required" class="hasDatepicker">
                    </div>
                </div>
                <div class="col-33">In DD/MM/YYYY format</div>
            </div>
            <div class="row">
                <div class="col-31 mandatory">Date of Expiry </div>
                <div class="col-32">
                    <div class="form-row show-inputbtns">
                        <input type="text" required="required" value="" name="passport_expiry_date" maxlength="10" id="passport_expiry_date" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}" class="hasDatepicker">
                    </div>
                </div>
                <div class="col-33">In DD/MM/YYYY format.Minimum Six Months Validity is Required from journey date.</div>
            </div>
            <div class="row">
                <div class="col-11 text_center">
                    <input name="submit" type="submit" class="btn btn-primary" id="continue" value="Save and Continue">
                    <input name="submit_btn" type="submit" class="btn btn-primary" id="exit" formnovalidate="" value="Save and Temporarily Exit" title="Save and Register Later">
                </div>
            </div>
        </div>
    </div><!-- end of wrapper -->
    <!--<input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

<script src="<?=THEME?>custom/Apply for Visa2_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa2_files/jquery-ui.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa2_files/bootstrap.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa2_files/main.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa2_files/form.js.download"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            //alert("Submitted");
        });
    });
</script>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><iframe src="<?=THEME?>custom/Apply for Visa2_files/saved_resource.html" title="chat widget logging" style="display: none !important;"></iframe></body></html>
