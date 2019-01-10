<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 04-Jan-19
 * Time: 1:28 AM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0074)https://www.evisaonline.org.in/index.php/welcomevisa/temporaryexit/BOL5320 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa8_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa8_files/jquery-ui.css">
    <link href="<?=THEME?>custom/Apply for Visa8_files/form.css" rel="stylesheet" type="text/css">
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
    <script> var base_url = 'https://www.evisaonline.org.in/';</script>
</head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<form method="post" action="https://www.evisaonline.org.in/index.php/welcomevisa/temporaryexit/BOL5320#" autocomplete="off" onsubmit="return validate_basic_details_form(3);">
    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.evisaonline.org.in/">
                <img src="<?=THEME?>custom/Apply for Visa8_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Applicant Details Form <div style="float:right;margin-right:10px;"> <a href="https://www.evisaonline.org.in/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa8_files/Home_2.png"></a> </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-11" style="text-align:center;"><div class="center" style="text-align:center;"><img src="<?=THEME?>custom/Apply for Visa8_files/checked.png"></div><h4>Thank you for applying the E-visa form. Please note your temporary Id "<?php echo $this->uri->segment('3'); ?>" for further refrence </h4></div>
            </div>

        </div>
    </div><!-- end of wrapper -->
    <!--<input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

<script src="<?=THEME?>custom/Apply for Visa8_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa8_files/bootstrap.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa8_files/main.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa8_files/form.js.download"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            // alert("Submitted");
        });
    });
</script>
</body></html>
