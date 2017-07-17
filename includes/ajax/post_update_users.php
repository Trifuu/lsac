<?php

define("_IEXEC", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$col=$_POST["col"];
$id =$_POST["id"];
$val=$_POST["val"];

global $db;

if($col=="nume" || $col=="tel" || $col=="email" || $col=="categorie"){
    try{
        $stmt=$db->prepare("update user set $col=:col where id=:id");
        $stmt->bindParam(':col',$val,PDO::PARAM_STR);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}