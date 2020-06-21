<?
    require_once "validate_access.php";
    $user = $_SESSION['user'];
?>

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


    <!-- cabeà¸£à¸‡alho -->
    <nav class="navbar navbar-dark" style="background-color: #3cb3d6">
        <a class="navbar-brand" href="home.php">
            <img src="information.png" class="logo-cnfg">
            <h7 style="color: black;">
                |
                <?echo($user)?>
            </h7>
        </a>

        <ul class="navbar-nav">
            <li class="nav-item navbar-dark">
                <a class="nav-link" href="index.php" style="color: black;">
                    <h7>Logout</h7>
                </a>
            </li>
        </ul>

    </nav>

    <div class="container">
        <div class="row">


            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Anotação
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="reg_note.php">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input name="title" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea name="description" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-info btn-block" href="home.php">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- Mensagem de sucesso -->
                                <? if(isset($_GET['title']) && $_GET['title'] == 'success') { ?>
                                <div id='alert_success' class="text-danger" style="text-align: center;font-weight: bold;">
                                    <script>
                                        /** deixa a mensagem um certo tempo na tela */
                                        var time = window.setTimeout(function() {
                                            document.getElementById('alert_success').innerHTML = 'Nota registrada!';
                                        }, 100);
                                        var time = window.setTimeout(function() {
                                            document.getElementById('alert_success').innerHTML = '';
                                        }, 2000);
                                    </script>
                                </div>
                                <? } ?>

                                <? if(isset($_GET['title']) && $_GET['title'] == 'error') { ?>
                                <div id='alert_success' class="text-danger" style="text-align: center;font-weight: bold;">
                                    <script>
                                        /** deixa a mensagem um certo tempo na tela */
                                        var time = window.setTimeout(function() {
                                            document.getElementById('alert_success').innerHTML = 'Escreva algo para ser anotado!';
                                        }, 100);
                                        var time = window.setTimeout(function() {
                                            document.getElementById('alert_success').innerHTML = '';
                                        }, 2000);
                                    </script>
                                </div>

                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


</body>

</html>