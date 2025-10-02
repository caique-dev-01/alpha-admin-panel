<?php
// Dados para a conexão com o banco de dados
$host = "localhost";   // Endereço do servidor (localhost = o próprio computador)
$db = 'alpha';         // Nome do banco de dados que você quer acessar
$user = 'root';        // Usuário do banco (padrão do MySQL geralmente é 'root')
$pass = '';            // Senha do usuário (aqui está vazia)
$charset = 'utf8mb4';  // Tipo de codificação de caracteres (para aceitar acentos e emojis)

// Montando a string de conexão (DSN = Data Source Name)
// Aqui juntamos as informações para dizer ao PHP como conectar no banco
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Configurações adicionais para a conexão
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Mostra erros do banco como exceção (mais fácil de debugar)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Quando buscar dados, vai trazer como array associativo (nome das colunas)
    PDO::ATTR_EMULATE_PREPARES => false, // Desativa "emulação" e usa queries preparadas reais (mais seguro)
];

// Tentando realizar a conexão
try { 
    // Criando o objeto PDO com os dados de conexão
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Se não deu erro, vai mostrar essa mensagem
    echo "Conexão realizada com sucesso!";

} catch (PDOException $e) {
    // Se der erro na conexão, vai mostrar uma mensagem explicando
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
}
?>
