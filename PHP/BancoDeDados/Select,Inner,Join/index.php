<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
$sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");
$sql->execute();
$info = $sql->fetchall();

foreach($info as $key => $value){
    echo 'Exibindo post de: '.$value['nome'];
    echo '<br>';
    echo 'Titulo: '.$value['titulo'];
    echo '<br>';echo 'Noticia: '.$value['conteudo'] ;
    echo '<hr>';
}



   /*  $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();

    foreach ($info as $key => $value){
        echo 'Titulo: '.$value['titulo'];
        echo '<br>';
        echo 'Noticia: '.$value['conteudo'] ;
        echo '<hr>';
    } */

    /* ------------------------------------------------------------------------------ */

    /* $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();

    $info = $sql->fetchAll();

    foreach ($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'Exebindo post de: '.$value['nome'];
        echo '<br>';
        $sql = $pdo->prepare("SELECT * From posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach($infoPosts as $key => $value){
            echo 'Titulo: '.$value['titulo'];
            echo '<br>';
            echo 'Noticia: '.$value['conteudo'] ;
            echo '<hr>';
        }
    } */


    /* ------------------------------------------------------------------------------------ */
?>