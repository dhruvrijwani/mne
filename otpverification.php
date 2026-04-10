<?php

//echo "<pre>";print_r($_POST);exit;

//$emailClass = new PostData();

/*if (isset($_REQUEST['mobile'])) {
    $mailsent = $emailClass->callback();
    setcookie('formfilled','yes');
}
else{
   $mailsent = false;
}*/

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$name2 = $_POST['fname'];
$mobile2 = str_replace(' ', '', $_POST['mobile']);
$email2 = $_POST['email'];
// $quali1 = $_POST['qualification1'];
// $quali2 = $_POST['qualification2'];
// $qualification2 = $quali1 . " , " . $quali2;
$qualification = $_POST['qualification'];
// var_dump($qualification);
$city2 = $_POST['city'];
$insta2 = $_POST['insta'];
$source2 = $_POST['utm_source'];
$link2 = "Landing Page";
$campaign2 = $_POST['utm_campaign'];
$channel2 = $_POST['utm_medium'];
$source_form2 = $_POST['source_form'];
$utm_source2 = $_POST['utm_source'];
$utm_medium2 = $_POST['utm_medium'];
$utm_term2 = $_POST['utm_term'];
$utm_campaign2 = $_POST['utm_campaign'];
$utm_content2 = $_POST['utm_content'];

if (!empty($name2) && !empty($email2) && !empty($mobile2) && !empty($qualification)) {
	/*-----------------Extraedge API Integration------------------------*/
	$url = 'https://thirdpartyapi.extraaedge.com/api/SaveRequest';
	$postArray = array(
		'AuthToken' => 'YANGPOODLP-04-08-2022',
		'Source' => 'yangpoodlp',
		'FirstName' => $name2,
		'Email' => $email2,
		'City' => $city2,
		'MobileNumber' => $mobile2,
		'Textb7' => $insta2,
		'LeadType' => 'Online',
		'LeadName' => 'Enquire Now',
        'Field12' => $utm_source2,
        'Field13' => $utm_medium2,
        'Field14' => $utm_campaign2,
		'LeadSource' => 'Before OTP',
		'Course' => 'MNE',
		//'Center'=> 'WeSchool',
		//'Location'=> '11 Month PGP In MNE'

	);

	//echo "<pre>";print_r($postArray);
	$json = json_encode($postArray);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$result = curl_exec($ch);

	//curl_close($ch);
	//echo $result;die;
	/* $res = array();
		if($result=='Success'){
			//echo 1111;exit;
			$res['status']='ok';
			$res['message']='inserted';
		}else{
			$res['status']='error';
			$res['message']='error';
		}
	echo json_encode($res);exit; */
	if ($result == 'Success') {
		// echo "return save_response();";
		// echo '<script>alert("Huu")</script>';
		
		// echo "success";
		// header("location:thankyou.php");
	} else {
		echo "Error!";
		exit;
	}

	/********************************End*********************************/
}

// $cstm_ppc_campaign = $_COOKIE['cstm_ppc_campaign'];
// $cstm_ppc_channel = $_COOKIE['cstm_ppc_channel'];
// $cstm_ppc_keyword = $_COOKIE['cstm_ppc_keyword'];
// $cstm_ppc_placement = $_COOKIE['cstm_ppc_placement'];
// $cstm_ppc_device = $_COOKIE['cstm_ppc_device'];


function generateNumericOTP($n)
{

    $generator = "1357902468";

    $result = "";

    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }

    return $result;
}

// Main program
$n = 6;
//print_r(generateNumericOTP($n));
$otpnumber = (generateNumericOTP($n));
// $otpnumber = "1234";
setcookie('projectscode', $otpnumber);


$otpmsg = "Thank You for Choosing Welingkar, Your OTP Verification Code is " . $otpnumber;


$url="http://web.mtextdg.in/api/pushsms?user=Allinace&authkey=92mtKOc7rUiog&sender=MedEnt&mobile=".$mobile2."&text=Thank+You+for+Choosing+Welingkar%2C+Your+OTP+Verification+Code+is+".$otpnumber."+Strategic+alliances+network+llp&rpt=1&summary=1&output=json&entityid=1401604530000013865&templateid=1007161837994212668";

//$url="http://web.mtextdg.in/api/pushsms?user=Allinace&authkey=92mtKOc7rUiog&sender=MedEnt&mobile=9868354562&text=Thank+You+for+Choosing+Welingkar%2C+Your+OTP+Verification+Code+is+".$otpnumber."+Strategic+alliances+network+llp&rpt=1&summary=1&output=json&entityid=1401604530000013865&templateid=1007161837994212668";

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $url);
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

$result2 = curl_exec($ch1);
// var_dump($result2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welingkar's - Weschool | Mass Media Communication and Entertainment course in Mumbai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive1.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/ekko-lightbox.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N2FTJCX');
    </script>
    <!-- End Google Tag Manager -->

    <!-- <script type="text/javascript">
           $(window).load(function(){
$('#myModal_consell').modal('show');
});
        </script>-->
    <style>
        .form-control {
            width: 100%;
            padding: 0.5em 0.5em;
            border: 1px solid #CCC;
            background: #fff;
            box-shadow: 0px 0px 0px #fff inset;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-error {
            color: red;
        }

        #mauticform_wrapper_mnenewbannerform {
            background-color: rgba(14, 13, 12, 0.52);
            padding: 3%;
            width: 103%;
            margin-top: -7px;
        }

        .ptb-50 {
            padding: 50px 0;
        }

        .otpform {
            margin: 30px auto 30px;
            padding: 40px 40px;
            -webkit-box-shadow: 3px 17px 43px 6px rgba(255, 255, 255, 0.75);
            -moz-box-shadow: 3px 17px 43px 6px rgba(0, 0, 0, 0.75);
            box-shadow: 3px 17px 43px 6px rgba(82, 79, 79, 0.75);
        }

        .otpform h2 {
            margin-bottom: 25px;
        }

        .mb-view {
            display: none;
        }

        @media only screen and (max-width: 767px) {
            .dk-view {
                display: none;
            }

            .mb-view {
                display: block;
                margin: 0 auto;
                margin-top: 90px;
            }

            .slider-item {
                margin-top: 20px;
                height: 447px;
                background-size: contain;
                background-position: top;
                background-repeat: no-repeat;
            }
        }

        @media screen and (max-width: 1024px) {
            .form {
                position: relative;
                width: 100%;
                z-index: 1;
            }

            .form:before {
                display: none;
            }
        }
    </style>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2FTJCX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Hotjar Tracking Code for https://www.welingkar.org/mediaandentertainment/ -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1714777,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 s-icon">
                    <div class=" float-right mt-lg-4 mt-md-4 mt-2">
                        <p class="footer_social">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel: 1800123500041" class="text-dark"> 1800-123-500041</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--NAVBAR END-->
    <div class="main-wrapper clearfix" id="main-home">

        <div class="page-content">
            <section class="ptb-50">

                <section class="container">

                    <div class="col-md-3 col-xs-12"></div>
                    <div class="col-md-6 col-xs-12 otpform text-center">
                        <h2>Please enter the OTP sent on mobile.</h2>
                        <!--<form id="otp-form" action="http://embudo.in/2021/welingkar_lp/mne_program/action_page.php" name="otp-form" method="POST" onsubmit="return otpverify('otp-form');">-->
                        <form id="otp-form" action="contactAjax.php" name="otp-form" method="POST" onsubmit="return otpverify('otp-form');">
                            <div class="form-group">
                                <input type="text" name="otp" placeholder="Enter OTP">
                            </div>
                            <div class="form-group text-left">
                                <p id="some_div"></p>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="name" value="<?php echo $name2 ?>">
                                <input type="hidden" name="mobile" value="<?php echo $mobile2 ?>">
                                <input type="hidden" name="email" value="<?php echo $email2 ?>">
                                <input type="hidden" name="qualification" value="<?php echo $qualification ?>">
                                <input type="hidden" name="city" value="<?php echo $city2 ?>">
                                <input type="hidden" name="insta" value="<?php echo $insta2 ?>">
                                <input type="hidden" name="source" value="<?php echo $source2 ?>">
                                <input type="hidden" name="link" value="<?php echo $link2 ?>">
                                <input type="hidden" name="campaign" value="<?php echo $campaign2 ?>">
                                <input type="hidden" name="channel" value="<?php echo $channel2 ?>">
                                <input type="hidden" name="source_form" value="<?php echo "$source_form2"; ?>">
                                <input type="hidden" name="utm_source" value="<?php echo "$utm_source2"; ?>">
                                <input type="hidden" name="utm_medium" value="<?php echo "$utm_medium2"; ?>">
                                <input type="hidden" name="utm_term" value="<?php echo "$utm_term2"; ?>">
                                <input type="hidden" name="utm_campaign" value="<?php echo "$utm_campaign2"; ?>">
                                <input type="hidden" name="utm_content" value="<?php echo "$utm_content2"; ?>">
                                <button type="submit" class="btn-submit" name="Submit" id="otp_submit">Submit</button>
                                <button type="button" class="btn-submit" name="Submit" id="otp_resend">Resend OTP</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-xs-12"></div>

        </div>
        </section>




    </div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div id="back-gif">
                <div id="gif">
                    <img src="images/purple.gif" width="20%" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>


    <!-- Page Content End -->






    <!----about school---->

    <!----about school---->
    <!----gallery---->

    <!----gallery---->
    <!----faq section start---->

    <!----footer---->
    <footer class="pt-3 pb-3">
        <div class="container">
            <!-- <div class="row">
               <div class="col-md-12">
                  <p class="text-center">
                     © Welingkar 2021 | Designed by <a href="https://www.embudotech.com/" target="_blank" style="color:#f8bb41;">Embudotech</a>
                  </p>
                  <hr style="border-top: 1px solid rgba(255,255,255,0.2);">
               </div>
            </div>-->
            <div class="row">
                <div class="col-md-6 co-12">
                    <p class="text-left">© Copyright © Welingkar 2021 | Designed by <a href="https://www.embudotech.com/" target="_blank" style="color:#f8bb41;">Embudotech</a></p>
                </div>
                <div class="col-md-6 col-12 text-right">
                    <div class="footer-column">
                        <p class="margin_top20 footer_social">
                            <a href="https://www.facebook.com/StrategicAlliances.MnE/" class="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/welingkarinst?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UC4dlqIoDf_GRND-iIFAKeCw" class="" target="_blank"><i class="fab fa-youtube"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Code for Remarketing Tag -->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 938642359;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/938642359/?guid=ON&amp;script=0" />
            </div>
        </noscript>
    </footer>
    <!----footer end here---->





    <!--mobile form HERE-->
    <!-- Back to top button -->
    <!--JAVASCRIPT-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/cookie.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            Delete_Cookie('formfilled');
            $("#otp_resend").prop('disabled', true);
            $("#otp_resend").css('background-color', '#31bc9b30');
        });
    </script>

    <script>
        $(document).ready(function() {
            // $('.resend_otp').hide();
            var timeLeft = 40;
            var elem = document.getElementById('some_div');
            var timerId = setInterval(countdown, 1000);

            function countdown() {
                if (timeLeft == -1) {
                    clearTimeout(timerId);
                    doSomething();
                } else {
                    elem.innerHTML = timeLeft + ' seconds remaining';
                    timeLeft--;
                }
            }

            function doSomething() {
                // alert("Hi");
                $("#otp_resend").prop('disabled', false);
                $("#otp_resend").css('background-color', '#31bc9b');
                // $("#otp_submit").prop('disabled', true);
                $("#otp_resend").click(function() {
                    location.reload(true);
                });
            }

        });
    </script>

    <script>
        function otpverify(elm) {
            jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', true);
            setTimeout(function() {
                jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', false);
            }, 5000);


            var name = jQuery('#' + elm + ' input[name="name"]').val();
            var mobile = jQuery('#' + elm + ' input[name="mobile"]').val();
            var email = jQuery('#' + elm + ' input[name="email"]').val();
            var qualification = jQuery('#' + elm + ' input[name="qualification"]').val();
            var city = jQuery('#' + elm + ' input[name="city"]').val();
            var source = jQuery('#' + elm + ' input[name="source"]').val();
            var link = jQuery('#' + elm + ' input[name="link"]').val();
            var campaign = jQuery('#' + elm + ' input[name="campaign"]').val();
            var channel = jQuery('#' + elm + ' input[name="channel"]').val();

            var otp = jQuery('#' + elm + ' input[name="otp"]').val();

            var getotp = Get_Cookie('projectscode');

            if (otp == "") {
                alert('Please Enter Otp');
                return false;
            }

            if (getotp == otp) {
                $("#otp_submit").css('background-color', '#31bc9b30');
                return true;
            } else {
                alert("Enter Correct OTP");
            }
            return false;
        }
    </script>

    <script>
        // function save_response_contact(event) {
        // alert("in function");
        console.log("<?php echo $_POST['fname']; ?>");

        //       var full_number = phone.getNumber(intlTelInputUtils.numberFormat.E164);
        // $("input[name='phone[full]'").val(full_number);
        //   alert(full_number);

        // die('ss1');
        // event.preventDefault();
        var name = jQuery('input[name="name"]').val();

        var email = jQuery('input[name="email"]').val();

        var phone = jQuery('input[name="mobile"]').val();

        var qualification = jQuery('input[name="qualification"]').val();

        var city = jQuery('input[name="city"]').val();

        var insta = jQuery('input[name="insta"]').val();

        var source_form = jQuery('input[name="source_form"]').val();

        var utm_source = jQuery('input[name="utm_source"]').val();

        var utm_medium = jQuery('input[name="utm_medium"]').val();

        var utm_term = jQuery('input[name="utm_term"]').val();

        var utm_campaign = jQuery('input[name="utm_campaign"]').val();
        var utm_content = jQuery('input[name="utm_content"]').val();
        var form_submit_time = "Before OTP";


        console.log(source_form);
        // console.log(phone);
        // console.log(qualification);

        if (name != "" && phone != "") {
            jQuery.ajax({
                url: 'https://docs.google.com/forms/d/e/1FAIpQLScWSAT9X7MK1g5Vs-yofb5R9Sg1LEPHiNGcmyup0k5jcS9ADQ/formResponse',

                type: 'POST',
                data: {
                    "entry.187813707": name,
                    "entry.527715991": email,
                    "entry.1545971079": phone,
                    "entry.436868790": qualification,
                    "entry.648959390": city,
                    "entry.1610827184": insta,
                    "entry.86878049": source_form,
                    "entry.584146796": utm_source,
                    "entry.1653164483": utm_medium,
                    "entry.1348241113": utm_term,
                    "entry.1430944710": utm_campaign,
                    "entry.304718215": utm_content,
                    "entry.681147432": form_submit_time,
                },
                dataType: "xml",
                statusCode: {
                    0: function(data) {
                        console.log(data);
                        console.log('CROS Error');
                        // location.href = "./thankyou.php";
                        return true;
                    },
                    200: function(data) {
                        console.log('Excelsheet Success');
                    },
                    403: function(data) {
                        console.log('403 Error');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('There was an error in CRM Entry');
                }
            })
        }

        // }
    </script>

</body>

</html>