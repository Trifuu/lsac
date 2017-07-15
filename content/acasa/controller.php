<?php



switch ($view):
        case "login":
                require_once _ROOT_CONTENT . $page . '/view_login.php';
                break;

        case "login-action":
                require_once _ROOT_CONTENT . $page . '/view_login_process.php';
                break;

        case "dashboard":
                require_once _ROOT_CONTENT . $page . '/view_dashboard.php';
                break;

        case "logout":
                require_once _ROOT_CONTENT . $page . '/view_logout.php';
                break;

        case "edit":
                require_once _ROOT_CONTENT . $page . '/view_edit_profile.php';
                break;

        case "post_edit_account":
                require_once _ROOT_CONTENT . $page . '/post_edit_account.php';
                break;

        case "post_edit_password":
                require_once _ROOT_CONTENT . $page . '/post_edit_password.php';
                break;

        case "gateway":
                require_once _ROOT_CONTENT . $page . '/view_app_gateway.php';
                break;

        default:
                header('HTTP/1.0 404 Not Found');
                $title_app_title = "404 - Pagina Inexistenta";
                $content = _ROOT_CONTENT . "/error_pages/404.php";
                break;
endswitch;

