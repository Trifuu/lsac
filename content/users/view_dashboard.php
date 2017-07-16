<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');


$js[] = "app/users/dashboard.js";
$js[] = "datatables.js";
$title_app_title = "Utilizatori - LSAC";

$css[] = "datatables.css";
$users=  get_users(false);

$content = _ROOT_CONTENT . $page . "/tmpl_dashboard.php";