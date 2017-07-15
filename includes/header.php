<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');

header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
header('Cache-control: private');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Content-type: text/html; charset=utf-8');
header('Vary: User-Agent');