<?php



switch ($view):
        case "dashboard":
                require_once _ROOT_CONTENT . $page . '/view_dashboard.php';
                break;
            
        default:
                header('HTTP/1.0 404 Not Found');
                $title_app_title = "404 - Pagina Inexistenta";
                $content = _ROOT_CONTENT . "/error_pages/404.php";
                break;
endswitch;

