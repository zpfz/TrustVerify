<?php
  /**
     * 设置AES加密 
     * @param $data 加密字符串
     * @param $key 加密密钥
     * @param $iv 设置向量
     * @param $switch 设置加/解密，0 加密，1解密
     * @return string  返回加/解密后的字符
  */
  function setEncrypt($data, $key, $iv, $switch)
  {

    if($switch){   
      $encryptedData = base64_decode($data);
      $result = openssl_decrypt($encryptedData, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
      return $result;
    }else{   
      $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
      $result = base64_encode($encrypted);
      return $result; 
    }   
  }
