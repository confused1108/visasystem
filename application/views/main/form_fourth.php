<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 29-Dec-18
 * Time: 12:12 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!-- saved from url=(0080)https://www.evisaonline.org.in/index.php/welcomevisa/form_for_visa_step4/BOL5320 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa4_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa4_files/jquery-ui.css">
    <link href="<?=THEME?>custom/Apply for Visa4_files/form.css" rel="stylesheet" type="text/css">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
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


    <!--End-->

    <script> var base_url = 'https://www.evisaonline.org.in/';</script>
    <style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#c99ipcJ-1546065820561{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;}#Ig2nK9p-1546065820562.open{animation : tawkMaxOpen .25s ease!important;}</style></head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<!--<form method="post" action="--><?//=CTRL?><!--Visa/apply_fourth/-->evisaonline.org.in<!--" autocomplete="off" onsubmit="return validate_basic_details_form(3);">-->
    <?php echo form_open_multipart(CTRL.'Visa/apply_fourth/'.$this->uri->segment('3') , 'class="form-horizontal"');?>

    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.evisaonline.org.in/">
                <img src="<?=THEME?>custom/Apply for Visa4_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Applicant Details Form <div style="float:right;margin-right:10px;"> <a href="https://www.evisaonline.org.in/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa4_files/Home_2.png"></a> </div>
        </div>
        <div class="text_left text_bold" style="font-size: 1.2em">
            <span>Port of Arrival : <span style="color:#A30B18"><?php echo $appdata[0]['port_of_arrival']; ?></span></span>
            <!--span >Indian Mission <span style="color:#A30B18"><--s:property value="#session.missionName"/></span></span-->
            <hr style="border:none;height:1px">
            <span>Data saved Successfully.Please note down the Temporary Application ID :  <span style="color:#d6262c"><?php echo $appdata[0]['application_num']; ?></span></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-11">Upload Profile Photo</div>
            </div>
            <div class="row">
                <div class="col-31">Photo</div>
                <div class="col-32">
                    <input type="file" name="photo" onchange="readURL(this);" <?php if($appdata[0]['photo']=="") echo "required"; ?> />
<!--                    <input type="hidden" name="profile_pic" required="required" id="profile_pic" value="1546065886IMG_20180828_083724.jpg">-->
                </div>
                <div class="col-33" style="color:#A30B18">
                    <div id="passport_display" style="float:left;"><label>Sample Photo<span style="color:red;">*</span></label><br><img class="img-responsive" src="<?=THEME?>custom/Apply for Visa4_files/man1.jpg"></div>
                    <div id="profile_pic_display" style="margin-left:178px"><img src="<?php echo URL; echo "uploads/"; echo $appdata[0]['photo']; ?>" alt="Your Image" id="blah" width="145px" height="137px"></div>
                    <script>
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#blah')
                                        .attr('src', e.target.result)
                                        .width(150)
                                        .height(200);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-11">Upload Passport Copy</div>
            </div>
            <div class="row">
                <div class="col-31">Upload a scanned copy of your original coloured Passport or take a picture of passport and upload</div>
                <div class="col-32">
                    <input type="file" name="passport" <?php if($appdata[0]['passport']=="") echo "required"; ?> >
                </div>
            </div>
            <div class="row">
                <div class="col-11">Upload Medical Document</div>
            </div>
            <div class="row">
                <div class="col-31">Upload a scanned copy of Medical Document</div>
                <div class="col-32">
                    <input type="file" name="medical_doc" <?php if($appdata[0]['medical_doc']=="") echo "required"; ?>>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-11 text_center">
            <input name="submit" type="submit" class="btn btn-primary" id="continue" value="Continue">
            <input name="submit" type="submit" class="btn btn-primary" id="exit" formnovalidate="" value="Save and Temporarily Exit" title="Save and Register Later">
        </div>
    </div>

    <!-- end of wrapper -->
    <!--<input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

<script src="<?=THEME?>custom/Apply for Visa4_files/bootstrap.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa4_files/main.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa4_files/form.js.download"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            //alert("Submitted");
        });
    });
</script>
</body>
</html>