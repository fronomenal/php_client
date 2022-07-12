<?php

require 'vendor/autoload.php';

function fetchAPI(): string|bool {

    $url = "https://randomuser.me/api/?results=90";
    
    $req = curl_init($url);
    $reqOPTs = [CURLOPT_RETURNTRANSFER => $url, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_SSL_VERIFYPEER => false];

    curl_setopt_array($req, $reqOPTs);

    $res = curl_exec($req);

    curl_close($req);

    return $res;

}

function parseRes(?string $res): array {

    $res = json_decode($res, true);

    return $res;

}


?>
