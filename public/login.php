<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php
if(isset($_GET['error'])){
    echo "<p style='color:red'>Email ou mot de passe incorrect</p>";
}
?>

<form action="../scripts/authprocess.php" method="POST">

    <input type="hidden" name="action" value="login">

    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit">Login</button>

</form>

</body>
</html>