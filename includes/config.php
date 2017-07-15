<?php

if (!defined("_IEXEC")) {
    die("Acess neautorizat");
}

session_start();


define("_ROOT_CONTENT", _ROOT . "content/");
define("_ROOT_INCLUDES", _ROOT . "includes/");
define("_ROOT_ASSETS", _ROOT . "assets/");

require_once _ROOT_INCLUDES . 'functions.php';
require_once _ROOT_INCLUDES . 'functions_user.php';
require_once _ROOT_INCLUDES . 'header.php';




$title_app_name = "LSAC";
$title_app_separator = " // ";
$title_app_title = "Default Title";

define("_PROD_DOMAIN", "adresa");
define("_PREPROD_DOMAIN", "localhost");
define("_SITE_BASE", "http://localhost/lsac/");

define("_SITE_CSS", _SITE_BASE . "assets/css/");
define("_SITE_JS", _SITE_BASE . "assets/js/");
define("_SITE_IMG", _SITE_BASE . "assets/css/img/");



# -- MySQL DB intialisation
try {
    $db = new PDO("mysql:host=localhost;dbname=lsac", "root","nan587");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("A aparut o eroare (verifica user/parola/host pentru MySQL):<br>" . $e->getMessage());
}


# -- variable declare
$sid = session_id();
$sha256_session_id = hash("sha256", $sid);
