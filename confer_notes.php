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
                    <h7 style="color:black;">Logout</h7>
                </a>
            </li>
        </ul>

    </nav>

    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Notas salvas
                    </div>
                    <div class="card-body">

                        <?php
                        $array_notes = array();

                        $archive = fopen('notes.hd', 'r');


                        if ($archive) {
                            while (!feof($archive)) {
                                $note = fgets($archive);
                                $array_notes[] = $note;
                            }
                        } else {
                        }

                        fclose($archive);

                        $len_array = count($array_notes);

                        //percorre todo o vetor de notas
                        for ($i = 0; $i < $len_array; $i++) {

                            $user = substr($array_notes[$i], 0, strpos($array_notes[$i], '#'));

                            $aux_title = substr($array_notes[$i], strpos($array_notes[$i], '#') + 1, strlen($array_notes[$i]));
                            $title = substr($aux_title, 0, strpos($aux_title, '#'));

                            $descrip = substr($aux_title, strpos($aux_title, '#') + 1, strlen($aux_title));
                            
                
                            if ('admin@admin' == $_SESSION['user']) {
                                
                                echo ("<div class='card mb-3 bg-light' 
                               style='display: inline-block; height: 150px; 
                               padding: 10px; margin: 10px;
                               font-size: 22.5px; font-family: bold'>"
                                    . $title . '<br>');
                                echo ("<div class='card-text' 
                                style= 'display: inline-block; font-size: 15px;'>
                                
                                "
                                    . $descrip);
                                echo ("</div>");
                                echo ("</div>");
                            } else {

                                if ($user == $_SESSION['user']) {
                                    echo ("<div class='card mb-3 bg-light' 
                               style='display: inline-block; padding: 10px; 
                               margin: 5px; height: 150px;
                               font-size: 22.5px; font-family: bold'>"
                                        . $title . '<br>');
                                    echo ("<div class='card-text' 
                                style= 'display: inline-block; font-size: 15px;'>
                                
                                "
                                        . $descrip);
                                    echo ("</div>");
                                    echo ("</div>");
                                }
                            }
                        }
                        ?>


                        <div class="col-6">
                            <a class="btn btn-lg btn-info btn-block" href="home.php">Voltar</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>