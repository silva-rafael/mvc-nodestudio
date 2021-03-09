<?php

class Home extends \App\Core\Controller {

    public function index() {
        $user = $this->model('user');
        $user->nome = 'Rafael';
        $user->email = 'rafael@rafael';

        echo $user->nome. '<br />';
        echo $user->email;
    }
}
