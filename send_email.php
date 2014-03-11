<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once dirname(__FILE__) . '/SendEmailFromForm.php';
$emailer = new SendEmailFromForm;
$emailer->labelMap['name'] = "Name";
$emailer->labelMap['email'] = "Email";
$emailer->labelMap['phone'] = "Phone";
$emailer->labelMap['post_code'] = "Post Code";

$text = $emailer->buildHtml();
$text = "Contact via web form \n\r <br/> <br/> $text ";
$emailer->sendEmail('Muhammad Nawaz','muhammadnawaz@gmail.com',$_POST['email'],$_POST['name'],
$text,"Online message from " . $_POST['email']);

header ('Location: thankyou.html');