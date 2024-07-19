<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Receitas a Concurso</title>
 
    <link type="text/css" rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function funcaomenu() {
            var x = document.getElementById("mymenu");
            if (x.className === "menu") {
                x.className += " responsive";
            } else {
                x.className = "menu";
            }
        }
    </script>
    <style>
        .header {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="intem">
            <div class="menu" id="mymenu">
                <a href="../">HOME</a>
                <a href="../formulario/index.php">REGISTE-SE!</a>
                <a href="../formularioreceita/index.php">Submeta a SUA Receita</a>
                <a href="javascript:void(0);" class="icon" onclick="funcaomenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
        <br>
    </div>
    <div style="display: grid; grid-template-columns: 18% 18% auto 18% 18%;">
        <div style="position: relative; height: 100%;">
            <img src="../imagens/Premium_Vector___Spoon_fork_and_plate_vector_icon_symbol_illustration_restaurant_logo_design-removebg-preview.png" style="position: absolute; bottom: 0; width: 100%;">
        </div> 
        <div style="position: relative; height: 101%;">
            <img src="../imagens/Open Curtains L.png" style="position: absolute; bottom: -5%; width: 100%;">
        </div>
        <div class="casting" colspan="2">Receitas a Concurso
            <img src="../imagens/food3.jpeg" style="margin-top: 23%; width: 100%;">
        </div>
        <div style="position: relative; height: 101%;">
            <img src="../imagens/Open Curtains R.png" style="position: absolute; bottom: -5%; width: 100%;">
        </div>
        <div style="position: relative; height: 100%;">
            <img src="../imagens/Catering_Clipart_Transparent_PNG_Hd__Catering_Logo_Vector_Premium_Hotel__Illustration__Gourmet__Label_PNG_Image_For_Free_Download-removebg-preview.png" style="position: absolute; bottom: 0; width: 100%;">
        </div>
    </div>
    <hr>
    <div class="containerlista">
        <table border="1">
            <thead>
                <tr>
                    <th>Receita</th>
                    <th>Género</th>
                    <th>Tipo</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Configurações de ligação com a base de dados
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "gastronomia";

                // Criar a ligação
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Verificar a ligação
                if (!$conn) {
                    die("Conexão falhou: " . mysqli_connect_error());
                }

                // Query para selecionar as receitas
                $sql = "SELECT nome, genero, tipo, link FROM receita";
                $result = mysqli_query($conn, $sql);

                // Verificar se há resultados e exibir no ecrã
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['genero'] . "</td>";
                        echo "<td>" . $row['tipo'] . "</td>";
                        echo "<td><a href='" . $row['link'] . "' target='_blank'>Link</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhuma receita encontrada.</td></tr>";
                }

                // Fechar a ligação
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <div class="rodape2">Concurso Gastronómico @2024 </div>
</body>
</html