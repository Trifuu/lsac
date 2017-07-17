<?php

define("_IEXEC", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$id=$_POST["id"];

global $db;
try{
    $stmt=$db->prepare("delete from user where id=:id");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
} catch (Exception $ex) {
    die($ex->getMessage());
}