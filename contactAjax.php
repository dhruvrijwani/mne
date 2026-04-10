<?php
///echo "<pre>";print_r($_POST);

// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['mobile'];
// $qualification = $_POST['qualification'];
// $source = $_POST['utm_source'];
// $utm_medium = $_POST['utm_medium'];
// $utm_campaign = $_POST['utm_campaign'];
// $city = $_POST['city'];
// $insta = $_POST['insta'];
$name = $_POST['name'];
$mobile = str_replace(' ', '', $_POST['mobile']);
$email = $_POST['email'];
$qualification = $_POST['qualification'];
$city = $_POST['city'];
$insta = $_POST['insta'];
$source = $_POST['utm_source'];
$link = "Landing Page";
$campaign = $_POST['utm_campaign'];
$channel = $_POST['utm_medium'];
$source_form = $_POST['source_form'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_term = $_POST['utm_term'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];


if (!empty($name) && !empty($email) && !empty($mobile) && !empty($qualification)) {
	/*-----------------Extraedge API Integration------------------------*/
	$url = 'https://thirdpartyapi.extraaedge.com/api/SaveRequest';
	$postArray = array(
		'AuthToken' => 'YANGPOODLP-04-08-2022',
		'Source' => 'yangpoodlp',
		'FirstName' => $name,
		'Email' => $email,
		'City' => $city,
		'MobileNumber' => $mobile,
		'Textb7' => $insta,
		'LeadType' => 'Online',
		'LeadName' => 'Enquire Now',
		'Field12' => $utm_source2,
        'Field13' => $utm_medium2,
        'Field14' => $utm_campaign2,
		'LeadSource' => 'After OTP',
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
		
		echo "success";
		// header("location:thankyou.php");
	} else {
		echo "Error!";
		exit;
	}

	/********************************End*********************************/
}
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


</head>

<body>
	<form name="otp-form" method="POST">

		<div class="form-group">
			<input type="hidden" name="name" value="<?php echo $name ?>">
			<input type="hidden" name="mobile" value="<?php echo $mobile ?>">
			<input type="hidden" name="email" value="<?php echo $email ?>">
			<input type="hidden" name="qualification" value="<?php echo $qualification ?>">
			<input type="hidden" name="city" value="<?php echo $city ?>">
			<input type="hidden" name="insta" value="<?php echo $insta ?>">
			<input type="hidden" name="source" value="<?php echo $source ?>">
			<input type="hidden" name="link" value="<?php echo $link ?>">
			<input type="hidden" name="campaign" value="<?php echo $campaign ?>">
			<input type="hidden" name="channel" value="<?php echo $channel ?>">
			<input type="hidden" name="source_form" value="<?php echo "$source_form"; ?>">
			<input type="hidden" name="utm_source" value="<?php echo "$utm_source"; ?>">
			<input type="hidden" name="utm_medium" value="<?php echo "$utm_medium"; ?>">
			<input type="hidden" name="utm_term" value="<?php echo "$utm_term"; ?>">
			<input type="hidden" name="utm_campaign" value="<?php echo "$utm_campaign"; ?>">
			<input type="hidden" name="utm_content" value="<?php echo "$utm_content"; ?>">
			<!-- <button type="submit" class="btn-submit" name="Submit" id="otp_submit">Submit</button>
			<button type="button" class="btn-submit" name="Submit" id="otp_resend">Resend OTP</button> -->
		</div>
	</form>
	<script src="js/jquery.min.js"></script>

	<script>
		// function save_response() {
			// alert("in save function");
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
			var form_submit_time = "After OTP";

			// alert(name);
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
							location.href = "./thankyou.php";
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