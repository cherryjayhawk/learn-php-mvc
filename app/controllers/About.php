<?php

class About extends Controller {

    public function index( $name = 'chad', $job = 'Engineer') {
        $data = [];
        $data['page'] = 'About';
        $data['name'] = $name;
        $data['job'] = $job;

        $view = new Controller;
        $view->view('templates/header');
        $view->view('about/index', $data);
        $view->view('templates/footer');
    }

    public function page( $name = 'chad', $job = 'Engineer') {
        $data = [];
        $data['page'] = 'About';
        $data['name'] = $name;
        $data['job'] = $job;

        $view = new Controller;
        $view->view('templates/header');
        $view->view('about/page', $data);
        $view->view('templates/footer');
    }
}
