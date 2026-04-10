<?php

$name2 = $_POST['fname2'];
$mobile2 = str_replace(' ', '', $_POST['mobile2']);
$email2 = $_POST['email2'];
// $quali1 = $_POST['qualification1'];
// $quali2 = $_POST['qualification2'];
// $qualification2 = $quali1 . " , " . $quali2;
$qualification = $_POST['qualification'];
// var_dump($qualification);
$city2 = $_POST['city'];
$insta2 = $_POST['insta2'];
$source2 = $_POST['utm_source2'];
$link2 = "Landing Page";
$campaign2 = $_POST['utm_campaign'];
$channel2 = $_POST['utm_medium2'];
$source_form2 = $_POST['source_form2'];
$utm_source2 = $_POST['utm_source2'];
$utm_medium2 = $_POST['utm_medium2'];
$utm_term2 = $_POST['utm_term2'];
$utm_campaign2 = $_POST['utm_campaign2'];
$utm_content2 = $_POST['utm_content2'];

if (!empty($name2) && !empty($email2) && !empty($mobile2) && !empty($qualification)) {
    
// die('ss1');
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
        // echo '<script>alert("Huu");</script>';
        echo "Success";
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
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <form id="otp-form" >
        <!-- <div class="form-group">
            <input type="text" name="otp" placeholder="Enter OTP">
        </div>
        <div class="form-group text-left">
            <p id="some_div"></p>
        </div> -->
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
        </div>
    </form>
    <!-- <php echo $name2 ;?> -->

</body>

<script src="./jquery.min.js"></script>

<script>
function formSubmit() {
        // function save_response_contact(event) {
        // alert("in function");
        var name = jQuery('input[name="name"]').val();

        var email = jQuery('input[name="email"]').val();

        var phone = jQuery('input[name="mobile"]').val();

        // var qual1 = jQuery('input[name="qualification"]').val();
        // var qual2 = jQuery('input[name="qualification"]').val();

        // var qualification = qual1 + ", " + qual2;
        // var qualification = jQuery('input[name="qualification"]:checked').val();
        // console.log(qualification);

        var qualification = jQuery('input[name="qualification"]').val();

        var city = jQuery('input[name="city"]').val();

        var insta = jQuery('input[name="insta"]').val();

        var source_form = jQuery('input[name="source_form"]').val();

        var utm_source = jQuery('input[name="utm_source"]').val();

        var utm_medium = jQuery('input[name="utm_medium"]').val();

        var utm_term = jQuery('input[name="utm_term"]').val();

        var utm_campaign = jQuery('input[name="utm_campaign"]').val();
        var utm_content = jQuery('input[name="utm_content"]').val();
        var form_submit_time = "PopUP";

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
                        location.href = "https://mne.welingkar.org/";
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
    }
    formSubmit();
    // }
</script>

</html>