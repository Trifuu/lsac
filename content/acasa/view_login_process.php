<?php



$content = _ROOT_CONTENT . $page . "/default.php";


if (!isset($_POST["email"]) || !isset($_POST["parola"])) {
        die("POST fields missing");
}

$title_app_title = "In curs de autentificare";


$email = $_POST["email"];
$password = $_POST["parola"];
$password_hash = hash('sha256', $password);



try {
        $stmt = $db->prepare("select * from user where email= :email and d = 0 and parola = :parola");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR, 64);
        $stmt->bindParam(':parola', $password_hash, PDO::PARAM_STR, 64);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
        die($e->getMessage());
}

if ($user === false) {
        $_SESSION["error"] = "Email/parola gresite";
} else {
        try {
                $stmt = $db->prepare("update user set sid = :sid, last_action = unix_timestamp(now()), attempts = 0 where id = :id");
                $stmt->bindParam(':sid', $sid, PDO::PARAM_STR, 32);
                $stmt->bindParam(':id', $user["id"], PDO::PARAM_INT);
                $stmt->execute();
                
            
        } catch (PDOException $e) {
                die($e->getMessage());
        }
}

redirect(_SITE_BASE);
