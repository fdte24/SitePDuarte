<?php
// Verifica se método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $genero = htmlspecialchars($_POST['genero']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $link = htmlspecialchars($_POST['link']);

    // Configurações de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gastronomia";

    // Cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica a conexão
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Prepara a declaração SQL
    $sql = "INSERT INTO receita (nome, genero, tipo, link) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Verifica se a preparação foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da declaração: " . mysqli_error($conn));
    }

    // Vincula os parâmetros
    mysqli_stmt_bind_param($stmt, "ssss", $nome, $genero, $tipo, $link);

    // Executa a declaração preparada
    if (mysqli_stmt_execute($stmt)) {
        echo "Nova receita submetida com sucesso";
    } else {
        echo "Erro ao submeter receita: " . mysqli_stmt_error($stmt);
    }

    // Fecha a declaração e a conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>