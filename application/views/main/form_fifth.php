<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 29-Dec-18
 * Time: 1:52 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa5_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa5_files/jquery-ui.css">
    <link href="<?=THEME?>custom/Apply for Visa5_files/form.css" rel="stylesheet" type="text/css">
    <style>
        [class*='col-'] {
            float: left;
        }
        .h3, h3 {
            font-size: 16px;
        }
        table {
            border-spacing: 5px;
            border-collapse: separate;
        }
        table th {
            background: #baa27a;
            padding : 5px;
        }
        table td {
            background: #d9dbc9;
            padding : 5px;
            padding: 10px;
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="<?=THEME?>custom/Apply for Visa5_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110581702-2');
    </script>

    <script> var base_url = 'https://www.etaonlineindia.com/';</script>
</head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<form method="post" action="<?=CTRL?>Visa/apply_fifth/<?php echo $this->uri->segment('3'); ?>" autocomplete="off" onsubmit="return validate_basic_details_form(3);">
    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <a href="https://www.etaonlineindia.com/">
            <img src="<?=THEME?>custom/Apply for Visa5_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
        </a>
    </div>
    <div class="pageHeading1 text_center">
        Confirm Deatils <div style="float:right;margin-right:10px;"> <a href="https://www.etaonlineindia.com/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa5_files/Home_2.png"></a> </div>
    </div>
    <div class="text_left text_bold" style="font-size: .5em;text-align:center;">      <h3 style="color:purple;font-weight: bold;"> The Applicant is requested to verify the particulers field in this application form. The Applicant may face legal action(including refusal to enter India or deportation) in case of provisison wrong information.</h3>
        <h5> Please verify your registration details. If all details are correct please press <span style="color:purple;font-weight: bold;">"Verified and Continue"</span>.<br>For any corrections press <span style="color:purple;font-weight: bold;">"Modify/Edit"  </span> </h5>
        <h3> Please note down your temprory Application ID : <?php echo $appdata[0]['application_num']; ?></h3>
        <h4>Application Type - <?php echo $appdata[0]['applicationtype']; ?></h4>
    </div>
    <div class="container">
        <!--<div class="row">
            <div class="col-11">Profile Details</div>
        </div>-->
        <div class="row">
            <center>
                <table style="width:80%">
                    <tbody>
                    <tr>
                        <th colspan="2"> Basic Details</th>
                    </tr>
                    <tr><td>Application type</td><td><?php echo $appdata[0]['applicationtype']; ?></td></tr>
                    <tr> <td>First Name</td><td><?php echo $appdata[0]['fname']; ?></td> </tr>
                    <tr><td>Middle Name</td><td><?php echo $appdata[0]['mname']; ?></td></tr>
                    <tr> <td>Last Name</td><td><?php echo $appdata[0]['lname']; ?></td> </tr>
                    <tr><td>Sex</td><td><?php echo $appdata[0]['sex']; ?></td></tr>
                    <tr> <td>Email id</td><td><?php echo $appdata[0]['email_id']; ?></td> </tr>
                    <tr><td>Date of birth</td><td><?php echo $appdata[0]['dob']; ?></td></tr>
                    <tr> <td>Nationality</td><td><?php echo $appdata[0]['country_code']; ?></td> </tr>
                    <tr><td>Change name details</td><td><?php echo $appdata[0]['previous_name']; ?> <?php echo $appdata[0]['previous_surname']; ?></td></tr>
                    <tr> <td>Birth City</td><td><?php echo $appdata[0]['birth_city']; ?></td> </tr>
                    <tr><td>Birth Country</td><td><?php echo $appdata[0]['birth_country']; ?></td></tr>
                    <!--<tr> <td>National id</td><td></td> </tr>-->
                    <tr><td>Religion</td><td><?php echo $appdata[0]['religion']; ?></td></tr>
                    <tr> <td>Education</td><td><?php echo $appdata[0]['education']; ?></td> </tr>
                    <tr><td>Marital status</td><td><?php echo $appdata[0]['marital_status']; ?></td></tr>
                    <tr><td>Spouse name</td><td><?php echo $appdata[0]['spouse_name']; ?></td></tr>
                    <tr> <td>Spouse Nationality</td><td><?php echo $appdata[0]['spouse_nationality']; ?></td> </tr>
                    <tr><td>Spouse pre. nationality</td><td><?php echo $appdata[0]['spouse_pnationality']; ?></td></tr>
                    <tr> <td>Spouse Birth Place</td><td><?php echo $appdata[0]['spouse_birthplace']; ?></td> </tr>
                    <tr><td>Spouse birth country</td><td><?php echo $appdata[0]['spouse_bcountry']; ?></td></tr>
                    <tr>
                        <th colspan="2">Address Details</th>
                    </tr>
                    <tr><td>House no</td><td><?php echo $appdata[0]['house_no']; ?></td></tr>
                    <tr> <td>Village/town</td><td><?php echo $appdata[0]['vill_town']; ?></td> </tr>
                    <tr><td>State</td><td><?php echo $appdata[0]['state']; ?></td></tr>
                    <tr> <td>Zip/Postal code</td><td><?php echo $appdata[0]['zip_code']; ?></td> </tr>
                    <tr><td>Add. Country</td><td><?php echo $appdata[0]['add_country']; ?></td></tr>
                    <tr> <td>Mobile no</td><td><?php echo $appdata[0]['mobile_no']; ?></td></tr>
                    <tr><td>Acquire Nationality</td><td><?php echo $appdata[0]['acquire_nationality']; ?></td></tr>
                    <tr> <td>Pre Nationality</td><td></td> </tr>
                    <tr>
                        <th colspan="2">Family Details</th>
                    </tr>
                    <tr><td>Father name</td><td><?php echo $appdata[0]['father_name']; ?></td></tr>
                    <tr> <td>Father Nationality</td><td><?php echo $appdata[0]['father_nationality']; ?></td> </tr>
                    <tr><td>Father pre. nationality</td><td><?php echo $appdata[0]['father_pnationality']; ?></td></tr>
                    <tr> <td>Father Birth Place</td><td><?php echo $appdata[0]['father_birthplace']; ?></td> </tr>
                    <tr><td>Father birth country</td><td><?php echo $appdata[0]['father_bcountry']; ?></td></tr>
                    <tr> <td>Mother name</td><td><?php echo $appdata[0]['mother_name']; ?></td> </tr>
                    <tr><td>Mother nationality</td><td><?php echo $appdata[0]['mother_nationality']; ?></td></tr>
                    <tr> <td>Mother Pre. Nationality</td><td><?php echo $appdata[0]['mother_pnationality']; ?></td> </tr>
                    <tr><td>Mother birth place</td><td><?php echo $appdata[0]['mother_birthplace']; ?></td></tr>
                    <tr> <td>Mother birth country</td><td><?php echo $appdata[0]['mother_bcountry']; ?></td> </tr>
                    <tr>
                        <th colspan="2">Passport Details</th>
                    </tr>
                    <tr> <td>Passport type</td><td><?php echo $appdata[0]['passport_type']; ?></td> </tr>
                    <tr><td>Passport no</td><td><?php echo $appdata[0]['passport_no']; ?></td></tr>
                    <tr> <td>Passport Place of Issue</td><td><?php echo $appdata[0]['passport_place_of_issue']; ?></td> </tr>
                    <tr><td>Passport Date Issue</td><td><?php echo $appdata[0]['passport_date_issue']; ?></td></tr>
                    <tr> <td>Passport Expiry Date</td><td><?php echo $appdata[0]['passport_expiry_date']; ?></td> </tr>
                    <tr>
                        <th colspan="2">Visa Details</th>
                    </tr>
                    <tr><td>Port of Arrival</td><td><?php echo $appdata[0]['port_of_arrival']; ?></td></tr>
                    <tr> <td>Telephone No</td><td><?php echo $appdata[0]['telephone_no']; ?></td> </tr>
                    <tr><td>Exp Date of Arrival</td><td><?php echo $appdata[0]['exp_arrival_date']; ?></td></tr>
                    <tr> <td>Visa Type</td><td><?php echo $appdata[0]['e_visatype']; ?></td> </tr>
                    <tr><td>Visa Duration</td><td>60</td></tr>
                    <tr> <td>No. of Entries</td><td>Double</td> </tr>
                    <tr><td>Pakistan Naltionality</td><td><?php echo $appdata[0]['pak_naltional']; ?></td></tr>

                    <tr>
                        <th colspan="2">Occupation Details</th>
                    </tr>
                    <tr> <td>Present Occupation</td><td><?php echo $appdata[0]['present_occupation']; ?></td> </tr>
                    <tr><td>Employer Name</td><td><?php echo $appdata[0]['employer_name']; ?></td></tr>
                    <tr> <td>Emp. Desigation</td><td><?php echo $appdata[0]['emp_designation']; ?></td> </tr>
                    <tr> <td>Employer Address</td><td><?php echo $appdata[0]['employer_add']; ?></td> </tr>
                    <tr><td>Employer Phone No.</td><td><?php echo $appdata[0]['employer_phone']; ?></td></tr>
                    <tr>
                        <th colspan="2">Documents Details</th>
                    </tr>
                    <tr> <td>Profile Photo</td><td><img src="<?php echo URL; echo "uploads/"; echo $appdata[0]['photo']; ?>" width="100px" height="130px"></td> </tr>
                    <tr><td colspan="2"><br></td></tr>
                    <tr><td>Passport Photo</td><td><img src="<?php echo URL; echo "uploads/"; echo $appdata[0]['passport']; ?>" width="100px" height="130px"></td></tr>
                    <tr><td colspan="2"><br></td></tr>
                    <tr> <td>Medical Doc Pic</td><td><img src="<?php echo URL; echo "uploads/"; echo $appdata[0]['medical_doc']; ?>" width="100px" height="130px"></td> </tr>
                    <tr><td>Created Date</td><td>2018-12-28 14:11:19</td></tr>

                    </tbody></table> </center>
        </div>

        <div class="row">
            <div class="col-11 text_center">
                <button type="button" name="submit" class="btn btn-primary btn-lg" onclick="backurl(&#39;https://www.etaonlineindia.com/welcomevisa/form_for_visa_step2/BOL5320&#39;);">Modify/Edit</button>
                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Verified and Continue</button>
            </div>
        </div>
    </div>
    <!-- end of wrapper -->
    <!--<input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

</body></html>