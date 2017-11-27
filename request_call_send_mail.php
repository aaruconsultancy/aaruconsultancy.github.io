<?php 
require "request_call_mail.php";

$main = new mail();
$send = $main->sendmail($_POST['name'], $_POST['email'],  $_POST['country_code'], $_POST['phone'], $_POST['message']);

if($send){
    $msg = array('success'=> true);
    //echo json_encode($msg);
    echo '<script language="javascript">';
	echo 'alert("Message successfully sent");';
	echo 'window.location="index.html";';
	echo '</script>';
}
else{
    $msg = array('success'=> false);
    //echo json_encode($msg);
    echo '<script language="javascript">';
	echo 'alert("Your message was not sent due to some technical issue, please try again later!");';
	echo 'window.location="index.html";';
	echo '</script>';
}

?>