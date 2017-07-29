<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');


function getUrl($page, $view, $echo = false, $query = []) {
    //$curl = _SITE_BASE . "?page=$page&view=$view";

    $curl = _SITE_BASE . "$page/$view/";

    if (count($query)) {
        $cnt = 0;
        foreach ($query as $key => $value) {
            $curl .= ( ++$cnt == 1 ? "?" : "&") . "$key=" . urlencode($value);
        }
    }

    #$curl = str_replace("&", "&amp;", $curl);

    if ($echo) {
        echo $curl;
    } else {
        return $curl;
    }
}


function redirect($url) {
    $url = str_replace("&amp;", "&", urldecode($url));
    @header("Location: " . $url);
    die("<meta http-equiv='refresh' content='0;url=" . $url . "' /><a href='$url'>$url</a>");
}

function nli_pages() {
    global $page, $view, $user;
    return $user == null && !(($page == "acasa" || $page == "intervale") && ($view == "login-action" || $view == "logout" || $view == "check")) ? true : false;
}

function var_dump_custom($output) {
    echo "<pre>";
    var_dump($output);
    echo "</pre>";
}

function is_float_nr($nr) {
    return (is_float($nr) && is_numeric($nr));
}
