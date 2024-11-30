<?php

include_once("config/base.php");
include("utils/Encrypt.php");

$verify_code = $_POST['code'];
$decrypt_data = $_POST['verify_key'];
$decrypt_key = ENCRYPT_KEY;
$decrypt_iv = ENCRYPT_IV;
$real_code = setEncrypt($decrypt_data,$decrypt_key,$decrypt_iv,1);

if ($real_code == $verify_code){
  $verified_result = true;
}else{
  $verified_result = false;
}

$result = array(
    'code' => $verify_code,
    'result' => $verified_result
);
$result = json_encode($result,true);
echo $result;

?>