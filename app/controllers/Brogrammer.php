<?php

class Brogrammer extends Controller {

    public function index() {
        $data = [];
        $data['page'] = 'Brogrammer';

        // models
        $data['bros'] = $this->model('BroModel')->getBros();

        // views
        $this->view('templates/header', $data);
        $this->view('brogrammer/index', $data);
        $this->view('templates/footer');
    }
}
