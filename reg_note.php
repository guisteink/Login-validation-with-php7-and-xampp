<?php

	session_start();

    //configurando a formatacao a ser escrita
    $user = $_SESSION['user'];
	$tit = str_replace('#', '-', $_POST['title']);
	$descrip = str_replace('#', '-', $_POST['description']);

    

    /**
     * default len when fiels are null = 15;
     */
    $text = $user. '#'. $tit . '#' . $descrip . PHP_EOL;

    if (strlen($text) > 15) {    
        //abrindo o arquivo
        $archive = fopen('notes.hd', 'a');
        //escrevendo o texto
        fwrite($archive, $text);
       
        //movendo o ponteiro pro fim
        fseek($archive, 0, SEEK_END);
        
        //fechando o arquivo
        fclose($archive);
        header('Location: open_write.php?title=success');
    } else {
        header('Location: open_write.php?title=error');
    }

    

?>