<?php
sleep(2);

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: ../index.php');
    die;
}

require_once '../vendor/autoload.php';

//Initiate Validator
use Respect\Validation\Validator as v;

$json_response = ['success' => 0, 'message' => ''];

if (!v::notEmpty()->validate($_POST['g-recaptcha-response'])){
    $json_response['message'] = 'Please check the ReCaptcha box or refresh the page';
    die(json_encode($json_response));
}

//Validate ReCaptcha
$recaptcha = new \ReCaptcha\ReCaptcha('6LeHYhsTAAAAADQKYc5rngjj1I42Wdop1NOejuL2');
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if ($resp->isSuccess()){

    foreach ($_POST as $key => $data){
        //Validate all required input
        if (!v::notEmpty()->validate($data)){
            $json_response['message'] = 'Please enter all required fields';
            die(json_encode($json_response));
        }
    }

    if (!v::email()->validate($_POST['Email'])){
        $json_response['message'] = 'Please enter a valid email address';
        die(json_encode($json_response));
    }

    //Send email
    unset($_POST['g-recaptcha-response']);
    $mail = new PHPMailer();
    $mail->setFrom($_POST['Email'], $_POST['Name']);
    $mail->addAddress('julie@ankitdesigns.com', 'Julie');
    $mail->isHTML(true);
    if (isset($_POST['Subject'])){
        $mail->Subject = $_POST['Subject'];
    } else {
        $mail->Subject = 'New Message from YourHRTeam.ca';
    }
    $mail->Body = '';
    foreach($_POST as $key => $value){
        $mail->Body .= $key . ': ' . $value. '<br/>';
    }

    if(!$mail->send()) {
        $json_response['message'] = 'Message could not be sent. Please try again. Mailer Error: ' . $mail->ErrorInfo;
        die(json_encode($json_response));
    } else {
        $json_response['message'] = 'Message has been sent, we will get back to you soon.';
        $json_response['success'] = 1;
        exit(json_encode($json_response));
    }

} else {
    $json_response['message'] = 'ReCaptcha failed. Please refresh to page to retry';
    exit(json_encode($json_response));
}