<?php

session_start();
$_SESSION = array();
include("show.php");
$_SESSION['captcha'] = simple_php_captcha();


include_once("config/base.php");
include("utils/Encrypt.php");


$encrypt_data = $_SESSION['captcha']['code'];
$encrypt_key = ENCRYPT_KEY;
$encrypt_iv = ENCRYPT_IV;
$verify_key = setEncrypt($encrypt_data,$encrypt_key,$encrypt_iv,0);

$verify_img_src = $_SESSION['captcha']['image_src'];

$result = array(
    'verify_key' => $verify_key,
    'verify_img_src' => $verify_img_src,
    // 'verify_code' => $encrypt_data
);
$result = json_encode($result,true);
echo $result;

?>