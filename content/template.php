<!DOCTYPE html>

<html lang="ro-RO">
    <head>
        <title><?php echo $title_app_title . $title_app_separator . $title_app_name; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?php echo _SITE_CSS ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo _SITE_CSS ?>/font-awesome-4.7.0/css/font-awesome.min.css">
        <?php
        if (count($css) > 0) {
            foreach ($css as $row) {
                echo '<link rel="stylesheet" href="' . _SITE_CSS . $row . '">';
            }
        }
        ?>

        <link rel="stylesheet" href="<?php echo _SITE_CSS ?>styles.css">

    </head>
    <body class="<?php echo $page . " " . $view ?>">
        <?php
        if (!nli_pages()) {
            require_once _ROOT_CONTENT . 'header.php';
        }
        require_once $content;
        if (!nli_pages()) {
            require_once _ROOT_CONTENT . 'footer.php';
        }
        ?>

        <script>var _SITE_BASE = "<?php echo _SITE_BASE; ?>";</script>
        <script src="<?php echo _SITE_JS ?>jquery-3.1.1.min.js"></script>


        <?php
        if (count($js) > 0) {
            foreach ($js as $row) {
                echo '<script src="' . _SITE_JS . $row . '"></script>' . "\r\n";
            }
        }
        ?><script src="<?php echo _SITE_JS ?>bootstrap.min.js"></script>
    </body>
</html>