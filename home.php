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


    <!-- cabecalho -->
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
                <a class="nav-link" href="log_out.php" style="color: black;">
                    <h7>Logout</h7>
                </a>
            </li>
        </ul>

    </nav>

    <div class="container">
        <div class="row">

            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="open_write.php">
                                    Escrever nota
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="confer_notes.php">
                                    Ver nota(s)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>