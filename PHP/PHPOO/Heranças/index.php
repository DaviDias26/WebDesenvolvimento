<?php
    class Filha{
        public function Hello(){
            echo 'Hello world';
        }
    }

    class Pai extends Filha{
        public function Bye(){
            echo ' Byee world';
        }
    }

    $pai= new Pai;

    $pai->Hello();
?>