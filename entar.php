<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>

    <style>
        .formu {
            border: 1px solid #c2c2c2;
            border-radius: 3%;
            padding: 2%;
            margin: 1%;
            box-shadow: 2px 2px 3px 2px #000;
            text-align: center;
        }

        .formu input {
            margin-top: 2%;

        }

        .botao {
            float: right;
        }

    </style>

</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-md-4"></div>

            <form class="formu col-md-4" action="verificacao.php" method = "post">>
                <h3 class="mb-4">Login</h3>

                <img width="100" src="img/avatar.png" alt="">
                <input type="text" name="email" class="form-control" placeholder="Digite o E-mail">
                <input type="password" name="senha" class="form-control" placeholder="Digite a Senha"><br>
                <button type="submit" class="botao btn btn-success" name="loging-submit">Entrar</button>

            </form>
        </div>
    </div>


</body>

</html>
