<?php
use \App\Core\Controller;


class Notes extends Controller {

    public function ver($id = '') {
        
        $note = $this->model('Note');
        $dados = $note->findId($id);

        $this->view('notes/ver', $dados);
    }
}