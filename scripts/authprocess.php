<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $action = $_POST['action'] ?? '';

    /* ================= REGISTER ================= */
    if($action == "register"){

        $nom = $_POST['nom'] ?? '';
        $prenom = $_POST['prenom'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if(empty($nom) || empty($prenom) || empty($email) || empty($password)){
            header("Location: ../public/register.php?error=empty");
            exit();
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../public/register.php?error=email");
            exit();
        }

        echo "Inscription réussie";
    }

    /* ================= LOGIN ================= */
    if($action == "login"){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $testEmail = "test@gmail.com";
        $testPassword = "1234";

        if($email == $testEmail && $password == $testPassword){

            $_SESSION['user'] = [
                "nom" => "Test User",
                "role" => "admin",
                "email" => $email
            ];

            header("Location: ../public/dashboard.php");
            exit();

        }else{
            header("Location: ../public/login.php?error=1");
            exit();
        }
    }
}