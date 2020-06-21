<?php
    session_start();

if (!isset($_SESSION['autenticated']) || $_SESSION['autenticated'] != 'YES') {
    header('Location: index.php?email=erro3');
}
 
?>