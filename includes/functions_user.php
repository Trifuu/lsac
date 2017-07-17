<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');


function get_logged_in_user() {
        global $db, $sid;
        try {
                $stmt = $db->prepare("select * from user where sid = :sid");
                $stmt->bindParam(':sid', $sid, PDO::PARAM_STR, 64);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
                die($e->getMessage());
        }

        return $user === false ? null : $user;
}
function get_email($id){
    global $db;
    try{
        $stmt = $db->prepare("select email from user where id=:id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $email=$stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $email;
}
function get_users($table){
    global $db;
    try{
        $stmt = $db->prepare("select id,nume,email,tel,categorie from user");
        $stmt->execute();
        $users=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    if($table==false){
        return $users ==false ? null : $users;
    }else{
        $result="[";
        for($i=0;$i<count($users);$i++){
            $result=$result.'["'.$users[$i]["nume"].'","'.$users[$i]["email"].'","'.$users[$i]["tel"].'","'.$users[$i]["categorie"].'","<button type=\"submit\" class=\"btn btn-danger btn-users-edit\"> Delete</button>"],';
        }
        $result=$result."]";
        return $users ==false ? null:$result;
    }
}
function get_user_password(){
    global $db,$sid;
    try{
        $stmt =$db->prepare("select parola from user where sid=:sid");
        $stmt->bindParam(':sid', $sid, PDO::PARAM_STR, 64);
        $stmt->execute();
        $password=$stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $password["parola"];
}