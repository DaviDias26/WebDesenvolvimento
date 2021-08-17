<?php
    $a = array('Davi', 'Alexandre','Dias');


    /* foreach($a as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<br>';
    }
     */

     $total = count($a);

     for($i=0;$i<$total;$i++){
        echo $a[$i].' ';
     }
?>