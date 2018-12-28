<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 28-Dec-18
 * Time: 2:00 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0041)https://www.etaonlineindia.com/apply-visa -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link href="<?=THEME?>custom/Apply for Visa_files/form.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa_files/jquery-ui.css">
    <style>
        .row{
            margin-right: 0;
            margin-left: 0;
        }
        @media (min-width: 1200px){
            .container {
                width: 1000px;
            }
            [class*='col-'] {
                float: left;
            }
        }
        @media (min-width: 786px){
            .container {
                width: 680px;
            }
            [class*='col-'] {
                float: left;
            }
        }
        @media (max-width: 600px){
            .col-1{
                text-align: center;
                width: 100%;
            }
            .col-2, .col-3, .row.text_center{
                display: block;
                margin: 0 auto;
                width:90%;
                text-align: center;
            }
        }
    </style>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript" async="" src="<?=THEME?>custom/Apply for Visa_files/analytics.js.download"></script><script async="" src="<?=THEME?>custom/Apply for Visa_files/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript">
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
    <script async="" src="<?=THEME?>custom/Apply for Visa_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110581702-2');
    </script>

    <!--End-->
    <script> var base_url = 'https://www.etaonlineindia.com/';</script>
    <style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#syKYcGM-1545985622305{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;}#O3PAG3D-1545985622306.open{animation : tawkMaxOpen .25s ease!important;}</style></head>
<body class="" style="">

<form action="<?=CTRL?>Visa/apply_first" method="post" id="Registration_form" autocomplete="off">
    <!--  <form  method="post" action="Registration" autocomplete="off" onsubmit="return validate_registration_form(3);"> -->

    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.etaonlineindia.com/">
                <img src="<?=THEME?>custom/Apply for Visa_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            e-Visa Application <div style="float:right;margin-right:10px;"> <a href="https://www.etaonlineindia.com/apply-visa#" data-toggle="modal" data-target="#myModal"><img src="<?=THEME?>custom/Apply for Visa_files/ebook.png"></a> </div> <div style="float:right;margin-right:10px;"> <a href="https://www.etaonlineindia.com/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa_files/Home_2.png"></a> </div>

        </div>
        <div class="container">

            <div class="form_container">
                <div class="row">
                    <div class="col-1 mandatory" title="Type" id="application_type">Application Type</div>
                    <div class="col-2">
                        <select name="applicationtype" id="applicationtype" required="">
                            <option value="">Select...</option>
                            <option value="Normal Processing">Normal Processing (Processing Time 4 to 7 Business days)</option>
                            <option value="Urgent Processing">Urgent Processing (Processing Time Maximum 2 Business Day) </option>
                        </select>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="first" id="appl_first_name" style="">First Name</div>
                    <div class="col-2" style="">
                        <input name="fname" type="text" size="50" maxlength="50" value="" id="first_name" required="">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-1" title="last" id="appl_last_name">Last Name</div>
                    <div class="col-2">
                        <input name="lname" type="text" size="50" maxlength="50" value="" id="last_name">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Phone" id="appl_phone_no">Phone No.</div>
                    <div class="col-2">
                        <input name="telephone_no" type="text" size="50" maxlength="50" value="" id="phone_no" required="">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Passport Type" id="passport_type">Passport Type</div>
                    <div class="col-2">

                        <select name="passport_type" id="ppt_type_id" onchange="check_ppt_type()" required="">
                            <option value="Ordinary Passport">ORDINARY PASSPORT</option>
                        </select>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Nationality" id="appl_nationality">Nationality</div>
                    <div class="col-2">

                        <select name="country_code" id="nationality_id" onchange="fetchETVportList_js($(this).val())" required="">
                            <option value="">Select Nationality</option>

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
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Port Of Arrival" id="port_india">Port Of Arrival</div>
                    <div class="col-2">
                        <select name="port_of_arrival" id="missioncode_id">
                            <option value="" selected="selected">Select ...</option>
                            <option value="AHMEDABAD AIRPORT">AHMEDABAD AIRPORT</option>
                            <option value="AMRITSAR AIRPORT">AMRITSAR AIRPORT</option>
                            <option value="BAGDOGRA AIRPORT">BAGDOGRA AIRPORT</option>
                            <option value="BENGALURU AIRPORT">BENGALURU AIRPORT</option>
                            <option value="CALICUT AIRPORT">CALICUT AIRPORT</option>
                            <option value="CHANDIGARH AIRPORT">CHANDIGARH AIRPORT</option>
                            <option value="CHENNAI AIRPORT">CHENNAI AIRPORT</option>
                            <option value="COCHIN AIRPORT">COCHIN AIRPORT</option>
                            <option value="COCHIN SEAPORT">COCHIN SEAPORT</option>
                            <option value="COIMBATORE AIRPORT">COIMBATORE AIRPORT</option>
                            <option value="DELHI AIRPORT">DELHI AIRPORT</option>
                            <option value="GAYA AIRPORT">GAYA AIRPORT</option>
                            <option value="GOA AIRPORT">GOA AIRPORT</option>
                            <option value="GOA SEAPORT">GOA SEAPORT</option>
                            <option value="GUWAHATI AIRPORT">GUWAHATI AIRPORT</option>
                            <option value="HYDERABAD AIRPORT">HYDERABAD AIRPORT</option>
                            <option value="JAIPUR AIRPORT">JAIPUR AIRPORT</option>
                            <option value="KOLKATA AIRPORT">KOLKATA AIRPORT</option>
                            <option value="LUCKNOW AIRPORT">LUCKNOW AIRPORT</option>
                            <option value="MANGALORE AIRPORT">MANGALORE AIRPORT</option>
                            <option value="MANGALORE SEAPORT">MANGALORE SEAPORT</option>
                            <option value="MUMBAI AIRPORT">MUMBAI AIRPORT</option>
                            <option value="NAGPUR AIRPORT">NAGPUR AIRPORT</option>
                            <option value="PUNE AIRPORT">PUNE AIRPORT</option>
                            <option value="TIRUCHIRAPALLI AIRPORT">TIRUCHIRAPALLI AIRPORT</option>
                            <option value="TRIVANDRUM AIRPORT">TRIVANDRUM AIRPORT</option>
                            <option value="VARANASI AIRPORT">VARANASI AIRPORT</option>
                            <option value="VARANASI AIRPORT">VISHAKHAPATNAM AIRPORT</option>
                        </select>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="passport_no" id="appl_passport_no">Passport Number</div>
                    <div class="col-2">
                        <input name="passport_no" type="text" size="50" maxlength="50" value="" id="passport_no" required="">
                    </div>
                    <div class="col-3">
                    </div>
                </div>

                <div class="row">
                    <div class="col-1 mandatory " title="Date of Birth" id="appl_dob">Date of Birth</div>
                    <div class="col-2">

                        <div class="form-row show-inputbtns">
                            <input type="text" data-date-inline-picker="false" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}" data-date-open-on-focus="true" name="dob" size="10" id="dob" required="" class="hasDatepicker">
                        </div>
                    </div>
                    <div class="col-3" id="dd_mm_yy_1" title="(DD/MM/YYYY)">(DD/MM/YYYY)</div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Email ID" id="appl_email_id">Email ID</div>
                    <div class="col-2">
                        <input name="email_id" type="email" size="50" maxlength="50" value="" id="email_id">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Re-enter Email" id="re_email">Re-enter Email ID</div>
                    <div class="col-2">
                        <input name="confirm_email" maxlength="50" value="" type="email" size="50" id="confirm_email" required="">
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1 mandatory" title="Expected Date of Arrival" id="expected_arrival_date">Expected Date of Arrival</div>
                    <div class="col-2">
                        <div class="form-row show-inputbtns">
                            <input name="exp_arrival_date" type="text" data-date-inline-picker="false" data-date-open-on-focus="true" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}" size="10" id="exp_arruval_date" required="" class="hasDatepicker">
                        </div>
                    </div>
                    <div class="col-3" id="dd_mm_yy_2" title="(DD/MM/YYYY)">(DD/MM/YYYY)</div>
                </div>

                <div class="row">

                    <div class="col-1 mandatory" title="Expected Date of Arrival" id="expected_arrival_date">Visa Type</div>
                    <div class="col-2">
                        <select name="e_visatype" id="appl_type_id" required="">
                            <option value="" selected="">Select ...</option>
                            <option value="e-Tourist Visa">e-Tourist Visa</option>
                            <option value="e-Medical Visa">e-Medical Visa</option>
                            <option value="e-Business Visa">e-Business Visa</option>
                        </select>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row text_center">
                    <div id="registration_common_error" class="error1" style="text-align:center;display: none">

                    </div>
                    <input type="checkbox" id="read_instructions_check" required=""> I have read the instructions ,I have all the required documents in scanned pdf format and photograph in jpg/jpeg format.
                    <input type="hidden" value="3" name="appl.visa_type_id">
                    <br>
                    <input type="submit" class="btn btn-primary" style="width: 120px" value="Continue">
                    <input type="hidden" name="submit_registration" value="Continue">

                </div>

                <div style="display: block; clear: both;"></div><br><br>
                <div class="pageHeading1 text_center">
                    e-Visa Application
                </div>
            </div>
            <input type="hidden" id="visa_type_id" value="3">
        </div>
    </div>
    <input type="hidden" name="token" value="be02f8fd-5a0d-490b-a114-b760693651d4">

</form>
<br>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="display: none;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <center><h4 class="modal-title"><b>Application for Indian tourist e visa demystified</b></h4></center>

            </div>
            <div class="modal-body">
                <p>Are you an international traveler longing to travel the lengths and breadths of India? Has it been your dream to sit and view the diversity of this nation? If yes, then the time has come for you to <b>apply for Indian e visa</b>. The e visa is more hassle free than the regular one, and is also valid for a relatively shorter period of time.</p>
                <p>When you <b>apply for Indian e visa</b>, ensure that you submit only one application for the same. Anything else submitted against the same passport number will be considered illegal. Before travelling, ensure that as a foreign national you do have a valid passport, along with a printout of the visa approval, which was sent to your email. This will be explained when you <b>apply for Indian visa online</b>.</p>
                <p>Today you have the option to <b>apply for Indian visa online</b>. No need to stand in long queues in order to collect visa forms in your country, as you can <b>apply for Indian tourist visa over the Internet</b>. As soon as you <b>apply for e visa for India</b>, processing of the application will take a set number of days, depending on your country norms.</p>
                <h4><b>How to apply e visa for India</b></h4>
                <p>Choose a well-known portal that allows you to <b>apply for e visa for India</b>. Submit the e visa application online after payment. You will be given ETA via email. Upon completion of the entire process you will also be able to explain to your friends how to <b>apply e visa for India</b>. </p>
                <p>When you <b>apply Indian visa online</b>, you should also note that your passport needs to have at least six months validity from the date you arrive in India. A minimum of two blank pages are necessary for the Immigration Officer to be able to stamp the Indian visa. Once you <b>apply for Indian e visa</b>, you will get to know that e visa is valid for two entries when you <b>apply for Indian tourist visa</b>, and three entries in case of a medical visa, from the first arrival date.   </p>
                <p>When you <b>apply for Indian e visa</b>, make sure you choose a company that is reliable and provides quality check. <b>Apply Indian visa online</b> in order to save time. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script src="<?=THEME?>custom/Apply for Visa_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa_files/jquery-ui.js.download"></script><div id="syKYcGM-1545985622305" class="" style="display: block !important;"><iframe id="O3PAG3D-1545985622306" src="<?=THEME?>custom/Apply for Visa_files/saved_resource.html" frameborder="0" scrolling="no" title="chat widget" class="open" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; height: 520px !important; display: none !important;"></iframe><iframe id="gJpmNNo-1545985622307" src="<?=THEME?>custom/Apply for Visa_files/saved_resource(1).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 10px 0px !important; height: 60px !important; min-height: 60px !important; max-height: 60px !important; width: 60px !important; min-width: 60px !important; max-width: 60px !important; border-radius: 50% !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 20px !important; right: 20px !important; left: auto !important; display: block !important;"></iframe><iframe id="PEu07WX-1545985622307" src="<?=THEME?>custom/Apply for Visa_files/saved_resource(2).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; top: auto !important; bottom: 60px !important; right: 15px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important; display: none !important;"></iframe><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important;"></div><div id="fI6ygVJ-1545985622305" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important;"></div><div id="eE3efin-1545985622305" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important;"></div><div id="dyBl4ef-1545985622306" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important;"></div><iframe id="IWvdt6b-1545985622343" src="<?=THEME?>custom/Apply for Visa_files/saved_resource(3).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; bottom: 100px !important; top: auto !important; right: 20px !important; left: auto !important; display: none !important; height: 0px !important;"></iframe></div>
<script src="<?=THEME?>custom/Apply for Visa_files/bootstrap.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa_files/main.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa_files/form.js.download"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            //alert("Submitted");
        });
    });
</script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 577px; left: 557.844px; z-index: 1; display: none;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><select class="ui-datepicker-month" data-handler="selectMonth" data-event="change"><option value="0" selected="selected">Jan</option><option value="1">Feb</option><option value="2">Mar</option><option value="3">Apr</option><option value="4">May</option><option value="5">Jun</option><option value="6">Jul</option><option value="7">Aug</option><option value="8">Sep</option><option value="9">Oct</option><option value="10">Nov</option><option value="11">Dec</option></select><select class="ui-datepicker-year" data-handler="selectYear" data-event="change"><option value="2019" selected="selected">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-days-cell-over " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default ui-state-hover" href="https://www.etaonlineindia.com/apply-visa#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">4</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">5</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">11</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">12</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">18</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">19</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">25</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">26</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="https://www.etaonlineindia.com/apply-visa#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><iframe src="<?=THEME?>custom/Apply for Visa_files/saved_resource(4).html" title="chat widget logging" style="display: none !important;"></iframe></body></html>