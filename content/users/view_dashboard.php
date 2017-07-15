<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');


$js[] = "app/users/dashboard.js";
$js[] = "datatable/datatables.js";
$js[] = "datatable/dataTables.buttons.min.js";
$js[] = "datatable/dataTables.editor.min.js";
$js[] = "datatable/dataTables.select.min.js";
$title_app_title = "Utilizatori - LSAC";

$css[] = "datatables.css";

$content = _ROOT_CONTENT . $page . "/tmpl_dashboard.php";