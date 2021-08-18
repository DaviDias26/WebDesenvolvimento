<?php
    class Pessoa{
        private $nome ;
        private $idade;
        private $peso;

       /*  public function crescer(){
            $this->comer();
            echo '<br>';
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }

        public static $var = 'statico'; */

        public function setName($nome){
            $this->nome = $nome;
            echo $nome;
        }
    }

    $pessoa = new Pessoa;
   /*  $pessoa->crescer();
    echo '<br>';
    echo Pessoa::$var; */
    $pessoa ->setName('Davi');
?>