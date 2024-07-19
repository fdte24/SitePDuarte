<?php
/* formulario2 php Concurso Gastronomia Inscrição */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
    $cc = htmlspecialchars($_POST['cc']);
    $localidade = htmlspecialchars($_POST['localidade']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $observacoes = htmlspecialchars($_POST['observacoes']);

    // Conectar ao banco de dados (..XAMPP)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gastronomia";

    // Criar conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexão
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Preparar a declaração SQL
    $sql = "INSERT INTO pessoa (nome, data_nascimento, cc, localidade, email, telefone, observacoes) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar a declaração
    $stmt = mysqli_prepare($conn, $sql);

    // Verificar se a preparação foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da declaração: " . mysqli_error($conn));
    }

    // Vincular parâmetros
    mysqli_stmt_bind_param($stmt, "sssisss", $nome, $data_nascimento, $cc, $localidade, $email, $telefone, $observacoes);

    // Executar a declaração preparada
    if (mysqli_stmt_execute($stmt)) {
        echo "Novo registo criado com sucesso";
    } else {
        echo "Erro: " . mysqli_stmt_error($stmt);
    }

    // Fechar declaração e conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>