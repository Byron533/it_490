#!/usr/bin/php

<?php
//ERROR LOGGING
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('log_errors', TRUE);
ini_set('error_log', '/home/lord-byron/git/rabbitmqphp_example/dbLogs.txt');
ini_set('log_errors_max_len', 1024);



//Get cURL resource
$ch = curl_init();
$fp = fopen ("api_test.txt","w");

//Set URL
curl_setopt($ch, CURLOPT_URL,"http://pokeapi.co/api/v2/");

//Set Method
curl_setopt($ch, CURL_CUSTOMREQUEST, 'GET');

//Set Options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_FILE, $fp);

curl_exec($ch);

curl_close($ch);

fclose($fp)
?>


