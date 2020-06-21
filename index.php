<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

</head>

<body>


    <!-- cabeçalho -->
    <nav class="navbar navbar-dark" style="background-color: #3cb3d6">
        <a class="navbar-brand" href="index.php">
            <img src="information.png" class="logo-cnfg">
        </a>
    </nav>

    <div class="container">

        <div class="card-login">
            <div class="card">

                <div class="card-header" align="center">Login

                </div>

                <div class="card-body">
                    <form action="validate_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>

                        <!-- ERRO 01 -->
                        <? if(isset($_GET['email']) && $_GET['email'] == 'erro') { ?>
                        <div class="text-danger">
                            Usuario ou senha invalido(s)
                        </div>
                        <? } ?>

                        <!-- ERRO 02 -->
                        <? if(isset($_GET['email']) && $_GET['email'] == 'erro2') { ?>
                        <div class="text-danger">
                            Preencha os campos para continuar
                        </div>
                        <? } ?>

                        <!-- ERRO 03 -->
                        <? if(isset($_GET['email']) && $_GET['email'] == 'erro3') { ?>
                        <div class="text-danger">
                            Login necessario para acessar essa pagina
                        </div>
                        <? } ?>

                        <button class="btn btn-dark btn-block" type="submit">Entrar</button>

                    </form>
                </div>
            </div>

        </div>







    </div>






</body>

</html>