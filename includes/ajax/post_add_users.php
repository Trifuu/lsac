<?php

define("_IEXEC", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$nume=$_POST["nume"];
$email=$_POST["email"];
$telefon=$_POST["telefon"];
$categorie=$_POST["categorie"];

global $db;
try{
    $stmt=$db->prepare("INSERT INTO `user` (`nume`, `parola`, `email`, `tel`, `categorie`) VALUES (:nume, :parola, :email, :tel,:categ)");
    $stmt->bindParam(':nume',$nume,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':tel',$telefon,PDO::PARAM_STR);
    $stmt->bindParam(':categ',$categorie,PDO::PARAM_STR);
    $stmt->bindParam(':parola',get_user_password(),PDO::PARAM_STR);
    $stmt->execute();
} catch (Exception $ex) {
    die($ex->getMessage());
}