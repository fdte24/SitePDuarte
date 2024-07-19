<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Registo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Faça Aqui o seu REGISTO</h2>
        <form action="inscricao2.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="form-group">
                <label for="cc">Cartão de Cidadão</label>			
                <input type="text" id="cc" name="cc" required>
            </div>
            <div class="form-group">
                <label for="localidade">Localidade de Residência</label>
                <input type="text" id="localidade" name="localidade" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone/Contacto</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="observacoes">Observações</label>
                <textarea id="observacoes" name="observacoes" rows="1"></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <footer class="footer">
        <button onClick="location.href='../'">HOME</button>
        <button onclick="location.href='../pessoareceita/index.php'">Receitas a Concurso</button>
        <button onclick="location.href='../formularioreceita/index.php'">Submeta a SUA Receita</button>
    </footer>
</body>
</html>

