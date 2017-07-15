<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');


$content = _ROOT_CONTENT . $page . "/default.php";

 
try {
        $stmt = $db->prepare("update user set sid = '', last_action = unix_timestamp(now()) where id = :id");
        $stmt->bindParam(':id', $user["id"], PDO::PARAM_INT);
        $stmt->execute();
        
        
} catch (PDOException $e) {
        die($e->getMessage());
}


redirect(_SITE_BASE);
