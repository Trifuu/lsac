<?php

defined('_IEXEC') or die('Acces restrictionat. Access Denied.');




$content = _ROOT_CONTENT . $page . "/default.php";


if (!isset($_POST["parola"]) || !isset($_POST["parola_veche"]) || !isset($_POST["parola_noua"])) {
        $_LOGGER->error("Data tampering");
        die("POST fields missing");
}

$title_app_title = "Editare in curs...";


$parola = $_POST["parola"];
$parola_veche = $_POST["parola_veche"];
$parola_noua = $_POST["parola_noua"];
$parola_hash = hash("sha256", $parola);
$id = $_POST["id"];

if (strlen($parola) < 5 ||
        strlen($parola_veche) < 5 ||
        strlen($parola_noua) < 5 ||
        ($parola_noua !== $parola) ||
        !is_numeric($id)) {
        $_LOGGER->error("Data tampering");
        die("Incorrect data");
}

if ($user["id"] == $id) {
        if (hash("sha256", $parola_veche) != $user["parola"]) {
                redirect(getUrl("acasa", "edit", false, ["message" => "Parola veche nu este corecta", "status" => "nok"]));
                die("Incorrect data - password mismatch");
        }

        try {
                $stmt = $db->prepare("update user set parola = :parola where id = :id");
                $stmt->bindParam(':parola', $parola_hash, PDO::PARAM_STR, 64);
                $stmt->bindParam(':id', $user["id"], PDO::PARAM_INT);
                $stmt->execute();
        } catch (PDOException $e) {
                die("A aparut o eroare");
        }
} else {
        
}

redirect(getUrl("acasa", "logout"));
