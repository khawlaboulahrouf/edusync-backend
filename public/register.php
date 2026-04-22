<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<?php
if(isset($_GET['error'])){
    if($_GET['error']=="empty"){
        echo "<p style='color:red'>Tous les champs sont obligatoires</p>";
    }
    if($_GET['error']=="email"){
        echo "<p style='color:red'>Email invalide</p>";
    }
}
?>

<form action="../scripts/authprocess.php" method="POST" novalidate>

    <input type="hidden" name="action" value="register">

    <input type="text" name="nom" placeholder="Nom"><br><br>
    <input type="text" name="prenom" placeholder="Prénom"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit">S'inscrire</button>

</form>

</body>
</html>