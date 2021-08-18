<?php
    session_start();
    /* echo $_SESSION['nome'] = 'Davi'; */

    setcookie('nome','Davi',time() + (60*60*24), '/');
    echo $_COOKIE['nome'];
?>