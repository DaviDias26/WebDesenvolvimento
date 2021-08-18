<?php
    class teste{
        const VALOR=30;

        public function __construct()
        {
            echo self::VALOR;
        }
    }

    new teste;
?>