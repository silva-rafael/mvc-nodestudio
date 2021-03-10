<?php

class Home extends \App\Core\Controller {

    public function index() {
        $user = $this->model('user');
        $user->nome = 'Gisele';

        $this->view('home/index', $data = ['nome' => $user->nome]);
    }
}
