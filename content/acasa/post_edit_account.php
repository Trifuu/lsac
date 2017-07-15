<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');




$content = _ROOT_CONTENT . $page . "/default.php";


if (!isset($_POST["email"]) || !isset($_POST["nume"]) || !isset($_POST["id"])) {
        die("POST fields missing");
}

$title_app_title = "Editare in curs...";


$email = $_POST["email"];
$nume = $_POST["nume"];
$id = $_POST["id"];
$tel = isset($_POST["tel"]) ? strip_tags($_POST["tel"]) : "";

if (strlen($nume) < 1 || !filter_var($email, FILTER_VALIDATE_EMAIL) || !is_numeric($id)) {
        die("Incorrect data");
}


if (get_email($email) != null && $email != $user["email"]) {
        redirect(getUrl("acasa", "edit", false, ["message" => "Adresa de email $email exista deja.", "status" => "nok"]));
}

if ($user["id"] == $id) {
        try {
                $stmt = $db->prepare("update user set t = unix_timestamp(now()), last_action = unix_timestamp(now()), nume = :nume, email = :email, tel = :tel where id = :id");
                $stmt->bindParam(':nume', $nume, PDO::PARAM_STR, 64);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR, 64);
                $stmt->bindParam(':tel', $tel, PDO::PARAM_STR, 15);
                $stmt->bindParam(':id', $user["id"], PDO::PARAM_INT);
                $stmt->execute();
        } catch (PDOException $e) {
                die("A aparut o eroare la modificarea detelor personale.");
        }
} else {
        
}

redirect(getUrl("acasa", "edit", false, ["message" => "Cont modificat cu succes", "status" => "ok"]));
