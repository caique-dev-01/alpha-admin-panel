<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do administrador</title>
    
</head>
<body>
    <h2>Login do administrador</h2>
    <form action="processa_login.php" method="POST"></form>
    <div>
        <h2>Login</h2>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
    </div>
        <br><br>
    <div>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
    </div>
        <br><br>
        <input type="submit" value="Login">
</body>
</html>