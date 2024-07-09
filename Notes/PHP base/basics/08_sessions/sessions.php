<?php

session_start();

$login = "";
$error = false;
$error_message = "";

if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
// else unset($_SESSION['count']);

if ($_SESSION['count'] === 3) {
    $error = true;
    $error_message = "Compte bloqué";
}

if (isset($_POST['login'], $_POST['password']) && $_SESSION['count'] < 3) {

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if (empty($login) || empty($password)) {
        $error = true;
        $error_message = "Vous devez entrer un login / mot de passe";

    } else {
        if ($login !== "admin" || $password !== "admin") {
            $error = true;
            $error_message = "Login / mot de passe incorrect";
            $_SESSION['count']++;
        } else {
            $error_message = "Connecté";
            $_SESSION['count'] = 0;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr-be">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les Sessions</title>

        <style>
            form>* {
                display: block;
                margin: 10px 0;
            }

            .alert {
                border: 1px solid black;
                border-radius: 3px;
                width: 160px;
                padding: 10px 15px;
            }

            .error {
                color: red;
                border: red;
                background: lightcoral;
            }

            .success {
                color: green;
                border: green;
                background: chartreuse;
            }
        </style>
    </head>

    <body>
        <?php

        echo "<p>Tentatives restantes : " . 3 - $_SESSION['count'] . "</p>";

        if ($error_message) {
            echo "<p class='alert " . ($error ? "error" : "success") . "'>";
            echo $error_message;
            echo "</p>";
        }

        ?>

        <form action="./session.php" method="post">

            <label for="login">Login :</label>
            <input type="text" name="login" id="login" value="<?= $login; ?>">

            <label for="password">Mot de passe :</label>
            <input type="text" name="password" id="password">

            <button type="submit" <?= ($_SESSION['count'] === 3 ? 'disabled' : '') ?>>Connexion</button>

        </form>
    </body>
</html>