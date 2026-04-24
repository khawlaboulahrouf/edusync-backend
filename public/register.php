<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>

    <!-- Tailwind + Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">

<div class="flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white rounded-lg shadow p-6">

        <h2 class="text-2xl font-bold text-center mb-6">Créer un compte</h2>

        <form action="../scripts/authprocess.php" method="POST" class="space-y-4">

            <!-- Nom -->
            <div>
                <label class="block mb-1 text-sm font-medium">Nom</label>
                <input type="text" name="nom"
                    class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Prenom -->
            <div>
                <label class="block mb-1 text-sm font-medium">Prénom</label>
                <input type="text" name="prenom"
                    class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 text-sm font-medium">Email</label>
                <input type="email" name="email"
                    class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Password -->
            <div>
                <label class="block mb-1 text-sm font-medium">Mot de passe</label>
                <input type="password" name="password"
                    class="w-full p-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Button -->
            <button type="submit" name="register"
                class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">
                S'inscrire
            </button>

        </form>

    </div>

</div>

</body>
</html>