<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>Cadastro - Farmácia</title>
</head>
<body>
   

    <div class="container_input">
        <h2 class="textHome" >Cadastrar</h2>
        <label>Escolha a Farmácia de sua preferência</label><br><br>
        <select name="opcao">
            <option value="0"></option>
            <option value="1">Farmácia A</option>
            <option value="2">Farmácia B</option>
            <option value="3">Farmácia C</option>
            <option value="4">Farmácia D</option>
        </select><br><br>
            <form action="inserir.php" method="POST">
            <label for="nome">Nome completo:</label>
            <input type="text" name="nome" required>

            <label for="rg">RG:</label>
            <input type="text" name="rg" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" required><br><br>

            <label for="plano_saude">Possui Plano de Saúde?</label><br>

            Sim <input type="radio" name="plano_saude" value="Sim"><br>
            Nao <input type="radio" name="plano_saude" value="Não" checked>
            <br><br>

            <label for="farmacia_popular">Utiliza Farmácia Popular?</label><br>

            Sim <input type="radio" name="farmacia_popular" value="Sim"> <br>
            Não <input type="radio" name="farmacia_popular" value="Não" checked>
            <br><br>
            

            <label for="produtos_farmacia_popular">Quais produtos da Farmácia Popular você utiliza?</label><br>
            <input type="text" name="produtos_farmacia_popular" id="produtos_farmacia_popular" checked>

            <br><br>
            <button type="submit">Enviar</button><br><br>
            <br>

            <?php
            session_start();

                if (isset($_POST['nome'], $_POST['rg'], $_POST['telefone'], $_POST['plano_saude'], $_POST['farmacia_popular'])) {
                    //Passe o dado para o construtor
                    $_SESSION['nome']               =   $_POST['nome'];
                    $_SESSION['rg']                 =   $_POST['rg'];
                    $_SESSION['telefone']           =   $_POST['telefone'];
                    $_SESSION['plano_saude']        =   $_POST['plano_saude'];
                    $_SESSION['farmacia_popular']   =   $_POST['farmacia_popular'];
                    
                } else {
                    echo "Todos os campos do formulário devem ser preenchidos.";
                }

            ?>
        </form>



        <p>Já tem uma conta? <a href="login.html">Faça login aqui</a>.</p>
    </div>

</body>
</html>
