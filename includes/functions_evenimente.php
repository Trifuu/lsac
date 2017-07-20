<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');

function get_evenimente(){
    global $db;
    try{
        $stmt=$db->prepare("select * from evenimente");
        $stmt->execute();
        $evenimente=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $evenimente==false? null:$evenimente;
}
function get_evenimente_after($data){
    global $db;
    try{
        $stmt=$db->prepare("select * from evenimente where data_incepere >= :data");
        $stmt->bindParam(':data',$data,PDO::PARAM_INT);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $result==false? null:$result;
}
function get_evenimente_before($data){
    global $db;
    try{
        $stmt=$db->prepare("select * from evenimente where data_incepere <= :data");
        $stmt->bindParam('data',$data,PDO::PARAM_INT);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $result==false? null:$result;
}