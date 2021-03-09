<?php

class Blog {

    public function index() {

        echo 'index do blog';
    }

    public function contato($nome) {
        echo 'O parametro passado foi = ' .$nome;
    }

    
}