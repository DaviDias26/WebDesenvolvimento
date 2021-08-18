<?php
    session_start();
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'] = 'Davi';
    }

    /* unset($_SESSION['nome']) ---> destroi a sessão */
    /* session_destroy(); */
?>