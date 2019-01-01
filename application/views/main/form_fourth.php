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
<!-- saved from url=(0080)https://www.etaonlineindia.com/index.php/welcomevisa/form_for_visa_step4/BOL5320 -->
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
    <script type="text/javascript" async="" src="<?=THEME?>custom/Apply for Visa4_files/analytics.js.download"></script><script async="" src="<?=THEME?>custom/Apply for Visa4_files/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript">
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
    <script async="" src="<?=THEME?>custom/Apply for Visa4_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110581702-2');
    </script>

    <!--End-->

    <script> var base_url = 'https://www.etaonlineindia.com/';</script>
    <style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#c99ipcJ-1546065820561{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;}#Ig2nK9p-1546065820562.open{animation : tawkMaxOpen .25s ease!important;}</style></head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<!--<form method="post" action="--><?//=CTRL?><!--Visa/apply_fourth/--><?php //echo $this->uri->segment('3'); ?><!--" autocomplete="off" onsubmit="return validate_basic_details_form(3);">-->
    <?php echo form_open_multipart(CTRL.'Visa/apply_fourth/'.$this->uri->segment('3') , 'class="form-horizontal"');?>

    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.etaonlineindia.com/">
                <img src="<?=THEME?>custom/Apply for Visa4_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Applicant Details Form <div style="float:right;margin-right:10px;"> <a href="https://www.etaonlineindia.com/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa4_files/Home_2.png"></a> </div>
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
                    <input type="file" name="photo" onchange="readURL(this);" />
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
                    <input type="file" name="passport">
                </div>
            </div>
            <div class="row">
                <div class="col-11">Upload Medical Document</div>
            </div>
            <div class="row">
                <div class="col-31">Upload a scanned copy of Medical Document</div>
                <div class="col-32">
                    <input type="file" name="medical_doc">
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-11 text_center">
            <input name="submit" type="submit" class="btn btn-primary" id="continue" value="Save and Continue">
            <input name="submit_btn" type="submit" class="btn btn-primary" id="exit" formnovalidate="" value="Save and Temporarily Exit" title="Save and Register Later">
        </div>
    </div>

    <!-- end of wrapper -->
    <!--<input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

<script src="<?=THEME?>custom/Apply for Visa4_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa4_files/jquery-ui.js.download"></script>
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
<div id="c99ipcJ-1546065820561" class="" style="display: block !important;"><iframe id="Ig2nK9p-1546065820562" src="<?=THEME?>custom/Apply for Visa4_files/saved_resource.html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; height: 520px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; display: none !important;"></iframe><iframe id="Pli2f5r-1546065820563" src="<?=THEME?>custom/Apply for Visa4_files/saved_resource(1).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 10px 0px !important; height: 60px !important; min-height: 60px !important; max-height: 60px !important; width: 60px !important; min-width: 60px !important; max-width: 60px !important; border-radius: 50% !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 20px !important; right: 20px !important; left: auto !important; display: block !important;"></iframe><iframe id="wiPRyLM-1546065820563" src="<?=THEME?>custom/Apply for Visa4_files/saved_resource(2).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; top: auto !important; bottom: 60px !important; right: 15px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important; display: block !important;"></iframe><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important;"></div><div id="jwaFJG3-1546065820562" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important;"></div><div id="wMVZidJ-1546065820562" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important;"></div><div id="FBbiGyQ-1546065820562" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important;"></div><iframe id="UBsi10r-1546065820582" src="<?=THEME?>custom/Apply for Visa4_files/saved_resource(3).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; bottom: 100px !important; top: auto !important; right: 20px !important; left: auto !important; display: none !important; height: 0px !important;"></iframe></div><iframe src="<?=THEME?>custom/Apply for Visa4_files/saved_resource(4).html" title="chat widget logging" style="display: none !important;"></iframe></body></html>