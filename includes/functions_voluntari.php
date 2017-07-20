<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');

function get_nume_voluntar($id){
    global $db;
    try{
        $stmt=$db->prepare("select nume from voluntari where id=:id");
        $stmt->bindParam('id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $nume=$stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $nume["nume"];
}