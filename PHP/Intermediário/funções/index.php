<?php
    function mostrarNome($nome, $idade){
        echo '<h2>O nome é:</h2>'.$nome;
        echo '<br>';
        echo "Tem : $idade anos";
    }

    mostrarNome('Davi', 21);
?>