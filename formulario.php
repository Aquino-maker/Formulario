<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulário importante</title>
</head>

<body>

    <div class="container">

        <div class="form_box">

            <h2 class="title">Formúlario de Contato</h2>

            <form action="processo.php" method="post">
                <label for="nome"></label><br>
                <input type="text" id="nome" name="nome" placeholder="Nome completo" required><br><br>

                <label for="email"></label><br>
                <input type="email" id="email" name="email" placeholder="Email" required><br><br>

                <label for="telefone"></label><br>
                <input type="text" id="telefone" name="telefone" placeholder="Telefone" required><br><br>

                <br><h3>Endereço</h3><br>
                <label for="rua"></label>
                <input type="text" id="rua" name="rua" placeholder="Rua" required><br><br>
                <label for="complemento"></label>
                <input type="text" id="complemento" name="complemento" placeholder="Complemento"><br><br>
                <label for="cidade"></label>
                <input type="text" id="cidade" name="cidade" placeholder="Cidade" required><br><br>
                <label for="estado"></label>
                <input type="text" id="estado" name="estado" placeholder="Estado" required><br><br>
                <label for="cep"></label>
                <input type="text" id="cep" name="cep" placeholder="CEP" required><br><br>
                <button type="submit">Confirmar</button>

            </form>

        </div>

    </div>
</body>

</html>