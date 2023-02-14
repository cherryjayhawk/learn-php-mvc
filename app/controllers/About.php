<?php

class About extends Controller {

    public function index( $name = 'Gigachad', $job = 'Brogrammer', $age = '20', $interest = 'Coffee') {
        $data = [];
        $data['page'] = 'About';
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['interest'] = $interest;

        $view = new Controller;
        $view->view('templates/header', $data);
        $view->view('about/index', $data);
        $view->view('templates/footer');
    }

}
