<?php
// index.php - (created by: logicinfo.com.br/ael)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Content-Type: application/json');

if (session_status() == PHP_SESSION_NONE) {

    session_start();

}

$url = "./src/configurations/setup.json";
$json = file_get_contents($url);
$data = json_decode($json,true);

$_SESSION["configurations"] = $data;

require_once 'src/routes/router.php';
