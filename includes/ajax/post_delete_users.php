<?php

define("_IEXEC", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";
global $db;
$id_user=  get_logged_in_user()["id"];
$multiple=$_POST["multiple"];
if($multiple=="true"){
    $id= $_POST["id"];
    for($i=0;$i<count($id);$i++){
        if($id[$i]!=$id_user){
            try{
                $stmt=$db->prepare("delete from user where id=:id");
                $stmt->bindParam(':id',$id[$i],PDO::PARAM_INT);
                $stmt->execute();
            } catch (Exception $ex) {
                die($ex->getMessage());
            }
        }
    }
}else{
    $id= $_POST["id"];
    if($id!=$id_user){
        try{
            $stmt=$db->prepare("delete from user where id=:id");
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
}