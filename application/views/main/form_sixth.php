<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 01-Jan-19
 * Time: 11:29 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0080)https://www.etaonlineindia.com/index.php/welcomevisa/visa_payment_detail/BOL5320 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width">
    <title>Apply for Visa</title>
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa6_files/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME?>custom/Apply for Visa6_files/jquery-ui.css">
    <link href="<?=THEME?>custom/Apply for Visa6_files/form.css" rel="stylesheet" type="text/css">
    <style>
        [class*='col-'] {
            float: left;
        }
        .h3, h3 {
            font-size: 16px;
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
    <script type="text/javascript" async="" src="<?=THEME?>custom/Apply for Visa6_files/analytics.js.download"></script><script async="" src="<?=THEME?>custom/Apply for Visa6_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110581702-2');
    </script>

    <script> var base_url = 'https://www.etaonlineindia.com/';</script>
</head>
<body onload="preventBack();" onpageshow="if (event.persisted) preventBack();">
<form method="post" action="https://www.etaonlineindia.com/welcomevisa/final_payment/BOL5320" autocomplete="off" onsubmit="return validate_basic_details_form(3);">
    <!--onsubmit="return validate_basic_details_form();"-->
    <div class="wrapper">
        <div class="pageHeader">
            <a href="https://www.etaonlineindia.com/">
                <img src="<?=THEME?>custom/Apply for Visa6_files/banner1.png" alt="e-Tourist Visa" title="e-Tourist Visa">
            </a>
        </div>
        <div class="pageHeading1 text_center">
            Payment Details <div style="float:right;margin-right:10px;"> <a href="https://www.etaonlineindia.com/" title="Back To Home"><img src="<?=THEME?>custom/Apply for Visa6_files/Home_2.png"></a> </div>
        </div>
        <div class="text_left text_bold" style="font-size: .5em;text-align:center;">
            <h3> Please note down your temprory Application ID : <?php echo $appdata[0]['application_num']; ?></h3>
            <h4>Application Type - <?php echo $appdata[0]['applicationtype']; ?></h4>
            <h5 style="color:purple;font-weight: bold;">On pressing "Pay Now" ,the application will be redirected to Payment Gateway to pay the visa fee and will be outside the control of Visa Online Application.
                The responsibility of security of transaction process and details on payment page will be of Payment gateway.
                <br><br>
                On pressing "Pay Later", you can pay the visa fee later using your Temporary Application ID and date of birth.<br></h5>
        </div>
        <div class="container">
            <!--<div class="row">
                <div class="col-11">Profile Details</div>
            </div>-->
            <div class="row" style="background-color:#e7f2e2">
                <span style="color:#0D53A8;font-weight: bold; ">Disclaimer</span>
                <p class="sitePara">
                    All travelers seeking admission to India under the e-Tourist Visa Scheme are required to carry printout of the Electronic Travel Authorisation sent through email by Bureau of Immigration.
                    <br><br>
                    If your Electronic Travel Authorisation application is approved, it establishes that you are admissible to enter India under the e-Tourist Visa Scheme of Government of India. Upon arrival in India, records would be examined by an Immigration Officer at the port of entry.
                    <br><br>
                    <input type="hidden" name="application_id" value="BOL5320">
                    <input type="hidden" name="visa_type" value="Normal Processing-e-Medical Visa">
                    Biometric Details (Photograph &amp; Fingerprints) of the applicant shall be mandatorily captured at Immigration on arrival in India. Non-compliance to do so would lead to denial of entry into India.
                    <br><br>
                    A determination that you are not eligible for electronic travel authorisation does not preclude you from applying for a visa in Indian Mission for travel to India.
                    <br><br>
                    All information provided by you, or on your behalf by a designated third party, must be true and correct. An electronic travel authorisation may be revoked at any time and for any reason, such as new information influencing eligibility. You may be subject to legal action if you make a materially false, fictitious, or fraudulent statement or representation in an electronic travel authorisation application submitted by you.
                    <br><br>

                </p>
                <span style="color:#0D53A8;font-weight: bold; ">Undertaking</span>
                <p class="sitePara">
                    <input type="checkbox" name="checkb" required="">I, the applicant, hereby certify that I agree to all the terms and conditions given on the website <span class="style1">www.etaonlineindia.com</span> and understand all the questions and statements of this application. The answers and information furnished in this application are true and correct to the best of my knowledge and belief. <strong style="color:#000000">I understand and agree that once the fee is paid towards the Temporary application ID</strong> <strong style="color:#0D53A8">BOL5320</strong> <strong style="color:#000000">is  100% non-refundable and I will not claim a refund or dispute the transaction incase of cancellation request raised at my end. I also understand that www.evisa-india.in is only responsible for processing my application and the visa may be granted or rejected by the indian government. I authorized them to take the payment from my card online.</strong>
                </p>
                <div class="row"> <h3>Payment Options:</h3></div>
                <div align="center">
                    <span class="red_heading text_bold"><!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tbody><tr></tr><tr><td style="width: 20px;"><input type="radio" name="payment_options" value="paypal" required="" checked=""></td><td align="center"></td><td></td><td align="center"><a href="javascript:;" title="How PayPal Works"><img src="<?=THEME?>custom/Apply for Visa6_files/AM_mc_vs_ms_ae_UK.png" border="0" alt="PayPal Acceptance Mark"></a></td><td style="width: 239px;text-align: center;"><span class="red_heading text_bold"><b>e-Visa fee : $<?php echo $fees; ?>.00</b></span></td></tr></tbody></table><!-- PayPal Logo --> </span>
                    <input type="hidden" id="paypal_evisa_amount" value="150">
                    <input type="hidden" id="paypal_curr" value="USD">
                </div>
                <!--<div align="center">
                 <input type='hidden'  id="ebs_evisa_amount" value="10750">
                 <input type='hidden' id="ebs_curr" value="INR">
                <span class="red_heading text_bold"><table border="0" cellpadding="10" cellspacing="0" align="center"><tr></tr><tr><td style="width: 20px;"><input type="radio" name="payment_options" value="ebs" required></td><td align="center"></td><td></td><td align="center"><a href="javascript:;"  ><img src="https://www.etaonlineindia.com/webroot/new-images/ebs-online-payment.jpg" border="0" alt="EBS Acceptance Mark" height="110px" width="319px"></a></td><td style="width: 239px;text-align: center;"><span class="red_heading text_bold"><b>e-Tourist visa fee : INR 10,750.00 ($150.00)</b></span></td></tr></table> </span>
                </div>-->


                <input type="hidden" name="evisa_amount" id="evisa_amount" value="150">
                <input type="hidden" name="amount" id="amount" value="150">
                <input type="hidden" name="currency" id="currency" value="USD">
            </div>

            <div class="row">
                <div class="col-11 text_center">
                    <button type="button" name="submit" class="btn btn-primary btn-lg" onclick="backurl(&#39;https://www.etaonlineindia.com/welcomevisa/temporaryexit/BOL5320&#39;);">Pay Later</button>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Proceed To Payment</button>
                </div>
            </div>
        </div>
    </div><!-- end of wrapper -->
    <!--<input type="hidden" name="token" value="ce38d008-c647-4319-bc49-b8e6bc880a36">-->

</form>

<script src="<?=THEME?>custom/Apply for Visa6_files/jquery.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa6_files/jquery-ui.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa6_files/bootstrap.min.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa6_files/main.js.download"></script>
<script src="<?=THEME?>custom/Apply for Visa6_files/form.js.download"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            //alert("Submitted");
        });
    });
</script>
</body></html>