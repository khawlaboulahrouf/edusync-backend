<?php
require("../includes/db.php");

if (isset($_POST['register'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if($nom == "" || $prenom == "" || $email == "" || $password == ""){
        header("Location:../public/register.php?error=empty");
        exit();
    }
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        header("Location:../public/register.php?error=email");
        exit();
    }

    $password = password_hash($password , PASSWORD_DEFAULT);
    $sql ="INSERT INTO users (firstname , lastname , email , pasword ,role_id)
    VALUES(:nom , :prenom , :email , :password , :role_id)";
    $stmt = $conn -> prepare($sql);
    $stmt ->execute(['nom'=>$nom , 'prenom'=>$prenom , 'email'=>$email , 'password'=>$password , 'role_id'=>2]);
    header("Location:../public/login.php");
    exit();

}

if(isset($_POST['login'])){

   $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if(!empty($email)&& !empty($password)){
        $sql=$conn->prepare('select*from users where email=?');
        $sql->execute([$email]);
        $user=$sql-> fetch();
        if($user && password_verify($password,$user['pasword'])){
        session_start(); 
        // echo 'hi';   
        // $_SESSION['email'] = "email@gmail.com";
            $_SESSION['firstname'] = $user['firstname'];
            header("location: ../public/dashboard.php");
            exit();
        }else{
            header("location : login.php?error='Invalid email or password'");
        }
    }else{
        $message = "fill";
    }
}