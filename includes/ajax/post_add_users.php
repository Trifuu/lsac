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
    $stmt=$db->prepare("INSERT INTO `user` (`nume`, `parola`, `email`, `tel`, `categorie`) VALUES (?, 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', ?, ?,?)");
    $stmt->bindParam(1,$nume);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$telefon);
    $stmt->bindParam(4,$categorie);
    $stmt->execute();
} catch (Exception $ex) {
    die($ex->getMessage());
}