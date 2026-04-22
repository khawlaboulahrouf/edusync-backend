<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow">

        <h2 class="text-2xl font-bold text-center mb-6">Connexion</h2>

        <!-- message error -->
        <?php
        if(isset($_GET['error'])){
            echo "<p style='color:red;'>Email ou mot de passe incorrect</p>";
        }
        ?>

        <form action="../scripts/authprocess.php" method="POST">

            <input type="hidden" name="action" value="login">

            <div class="mb-4">
                <label>Email</label>
                <input type="text" name="email" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label>Mot de passe</label>
                <input type="password" name="password" class="w-full p-2 border rounded">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded">
                Se connecter
            </button>

        </form>

    </div>

</div>

</body>
</html>