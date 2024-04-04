<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Page de connexion</title>
</head>
<body>
    <main class="pageConnexion">
        <div>
        <h1>Connexion</h1>
        <form action="connexion.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button class="connexion" type="submit">Se connecter</button>
            <button class="inscription" type="url"><a href="inscription.php">page d'inscription</a>
        </form>
        </div>
    </main>
</body>
</html>