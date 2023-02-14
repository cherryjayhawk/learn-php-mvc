<?php

class Home extends Controller {

    public function index() {
        $data = [];
        $data['page'] = 'Home';

        // models
        $data['name'] = $this->model('UserModel')->getName();
        $data['job'] = $this->model('UserModel')->getJob();
        $data['age'] = $this->model('UserModel')->getAge();
        $data['interest'] = $this->model('UserModel')->getInterest();

        // views
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
