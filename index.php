<?php

# -- start output buffer
ob_start();

$_TIME_START = microtime(true);

define("_ROOT", getcwd() . "/");
define("_IEXEC", 1);

require _ROOT . "includes/header.php";
require _ROOT . "includes/config.php";

$page = isset($_GET["page"]) ? htmlspecialchars(strip_tags($_GET["page"]), ENT_QUOTES) : "acasa";
$view = isset($_GET["view"]) ? htmlspecialchars(strip_tags($_GET["view"]), ENT_QUOTES) : "dashboard";
$user = get_logged_in_user();
$content = null;

$js = [];
$css = [];
?>



<?php

if (nli_pages()) {
        $page = "acasa";
        $view = "login";
}

switch ($page):
    case "acasa":
        require_once _ROOT_CONTENT . 'acasa/controller.php';
        break;
    case "users":
        require_once _ROOT_CONTENT . 'users/controller.php';
        break;
    case "evenimente":
        require_once _ROOT_CONTENT.'evenimente/controller.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        $content = _ROOT_CONTENT . "404.php";
        break;
endswitch;

require_once _ROOT_CONTENT . "template.php";

# -- end output buffer
$_TIME_END = microtime(true);
ob_end_flush();