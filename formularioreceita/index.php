<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissão de Receitas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2 class="outlined-text form-container" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'">Submeta a SUA Receita!</h2>
        <form action="formularioreceita.php" method="POST">
            <div class="form-group">
                <label for="nome">Receita: Nome / Designação</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="genero">Receita:</label>
                <select id="genero" name="genero" required>
                    <option value="">Género *</option>
                    <option value="Entrada">Entrada</option>
                    <option value="Sopa">Sopa</option>
                    <option value="PratoPrincipal">Prato Principal</option>
                    <option value="Sobremesa">Sobremesa</option>
       
                </select>
            </div>
            <div class="form-group">
                <label for="tipo">Receita</label>
                <select id="tipo" name="tipo" required>
                    <option value="">Selecione *</option>
                    <option value="Quente">Quente</option>
                    <option value="Frio">Frio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="link">Link:</label>
                <input type="text" id="link" name="link" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <footer class="footer">
        <button onClick="location.href='../'">HOME</button>
        <button onclick="location.href='../pessoareceita/index.php'">Receitas a Concurso</button>
        <button onclick="location.href='../formulario/index.php'">REGISTE-SE!</button>
    </footer>
	
</body>
</html>

