<?php

class Home  {
    // public function __construct() {
    //     $this->index();
    // }
    // protected $page;
    // protected $name;
    // protected $job;

    public function index($name = '', $job = '')
    {
        // echo "namaku $name, pekerjaanku $job";
        // $this->name = $name;
        // $this->job = $job;
        require_once('../app/views/home/home.html');
        
    }
}
