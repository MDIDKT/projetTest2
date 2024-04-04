<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Page d'inscription</title>
</head>
<body>
    <main class="pageInscription">
        <div>
        <h1>Inscription</h1>
        <form action="" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Valider le mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Valider le mot de passe" required>
            <button type="submit">S'inscrire</button>
        </form>
        </div>
    </main>
</body>
</html>