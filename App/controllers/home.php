<?php

class Home extends \App\Core\Controller {

    public function index($dados = '') {
        
        $note = $this->model('Note');
        $dados = $note->getAll();

        $this->view('home/index', $dados);
    }
}
