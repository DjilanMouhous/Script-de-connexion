<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion - 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
        <p>Se Connecter</p>
    
        <form method="POST" action="verificationinscription.php">
            <label>Adresse mail</label>
            <input name="mail" type="email" value="test@gmail.com" required>

            <label>Mot de passe</label>
            <input name="password" type="password" value="password" required>

            <input type="submit" value="Je me connecte">
        </form>
    

