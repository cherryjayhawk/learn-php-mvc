<?php

class Home extends Controller {
    // public function __construct() {
    //     $this->index();
    // }
    // protected $page;
    // protected $name;
    // protected $job;
    

    public function index( $name = 'chad', $job = 'Engineer') {
        $data = [];
        $data['page'] = 'Home';
        $data['name'] = $name;
        $data['job'] = $job;
        var_dump($data);
        // require_once('../app/views/')
        // require_once('../app/main/Controller.php');
        $view = new Controller;
        $view->view('templates/header');
        $view->view('home/index', $data);
        $view->view('templates/footer');
    }
}
