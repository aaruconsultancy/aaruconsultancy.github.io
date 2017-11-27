<?php 
require "mail.php";

$main = new mail();
$send = $main->sendmail($_POST['name'], $_POST['email'],  $_POST['subject'], $_POST['message']);

if($send){
    $msg = array('success'=> true);
    echo json_encode($msg);
}
else{
    $msg = array('success'=> false);
    echo json_encode($msg);
}

?>