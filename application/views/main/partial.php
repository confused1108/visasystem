<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 07-Jan-19
 * Time: 11:56 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0056)https://www.evisaonline.org.in/welcomevisa/complete_form -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link href="<?=THEME?>custom/Apply for Visa12_files/form.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa12_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa12_files/jquery-ui.css">
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
    <script>
        var base_url = "https://www.evisaonline.org.in/";
        // alert(base_url);
    </script>
</head>
<body>

<form action="<?=CTRL?>Visa/partial_complete" method="post" id="Registration_form" autocomplete="off">
    <!--  <form  method="post" action="Registration" autocomplete="off" onsubmit="return validate_registration_form(3);"> -->

    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.evisaonline.org.in/">
                <img src="<?=THEME?>custom/Apply for Visa12_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Complete Partially Filled Form <div style="float:right;margin-right:10px;"> <a href="https://www.evisaonline.org.in/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa12_files/Home_2.png"></a> </div>

        </div>
        <div class="container">

            <div class="form_container">

                <div class="row">
                    <div class="col-1 mandatory" title="first" id="appl_application_id" style="">Application Id </div>
                    <div class="col-2" style="">
                        <input name="application_id" type="text" size="50" maxlength="50" value="" id="application_id" required="">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row text_center">
                    <div id="registration_common_error" class="error1" style="text-align:center;display: none">

                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" style="width: 120px" value="Proceed">


                </div>

                <div style="display: block; clear: both;"></div><br><br>
                <div class="pageHeading1 text_center">
                    e-Visa Application
                </div>
            </div>

        </div>
    </div>


</form>
<br>
<script src="<?=THEME?>custom/Apply for Visa12_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa12_files/jquery-ui.js.download"></script></body></html>