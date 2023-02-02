<?php

class App {
    // mendefinisikan controller dan method default pada url
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    protected $url= [];

    public function __construct() {
        $url = $this->parseUrl();
        
        /*
        URL CONTROLLER
        */
        // mengecek dari url, apakah ada nama file/class/controller di url pada folder controllers
        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                // override $controller
                $this->controller = $url[0];
                // menghilangkan controller dari element array 
            }
            unset($url[0]);
        }

        // memasukkan class di controllers menjadi inner class, agar dapat memanggil methodnya
        require_once("../app/controllers/$this->controller.php");
        // // override $controller
        $this->controller = new $this->controller;

        /*
        URL METHOD
        */
        // mengecek apakah ada method di url
        if (isset($url[1])) {
            // mengecek apakah ada method dalam class yg bernama sama
            if (method_exists($this->controller, $url[1])) {
                // override $method 
                $this->method = $url[1];
                unset($url[1]);
            } 
        }

        /*
        URL PARAMETER
        */
        // mengecek apakah ada parameter di url
        if ($url != NULL) {
            $this->params = array_values($url);
        }
        
        /** 
         * MEMANGGIL HALAMAN
        */
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            // menghilangkan '/' diakhir url
            $this->url = rtrim($_GET['url']);
            // memfilter url dari karakter random
            $this->url = filter_var($this->url, FILTER_SANITIZE_URL);
            // memecah url delimiter: '/' dan mengkonversi string2 menjadi elemen array index
            $this->url = explode('/', $this->url); 
        }
        return $this->url;
    }

}
