<?php
session_start();

try {
    require_once ("conexao.php"); 
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from ADMINISTRADOR where ADM_NOME = :USERNAME and ADM_SENHA = :PASSWORD AND ADM_ATIVO = 1";
    $query = $pdo->prepare(query: $sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount()>0)
    {
        $_SESSION['admin_logado'] = "true";
        header("Location: painel_admin.php");
        exit();

    }else {
        $_SESSION["mensagem_erro"] = "Nome do administrador ou senha incorretos.";
        header("Location: login.php");
        exit();

    }

}
catch (PDOException $e) {
    $_SESSION["mensagem_erro"] = "erro de conexão ". $e->getMessage();
    header("Location: login.php");
}

?>