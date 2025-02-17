<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>

        <div class="form_box container style">
            <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $telefone = htmlspecialchars($_POST['telefone']);
            $rua = htmlspecialchars($_POST['rua']);
            $complemento = htmlspecialchars($_POST['complemento']);
            $cidade = htmlspecialchars($_POST['cidade']);
            $estado = htmlspecialchars($_POST['estado']);
            $cep = htmlspecialchars($_POST['cep']);

            echo "<h2>Dados do cadastro</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<h2>Endereço</h2>";
            echo "<p><strong>Rua:</strong> $rua</p>";
            echo "<p><strong>Complemento:</strong> $complemento</p>";
            echo "<p><strong>Cidade:</strong> $cidade</p>";
            echo "<p><strong>Estado:</strong> $estado</p>";
            echo "<p><strong>CEP:</strong> $cep</p>";
        } else {
            header("location: ../formulario.php");
            exit();
        }
        ?>
        </div>
    </main>
</body>
</html>


