<?php

class App
{
    public function __construct(){
        $bruh = $this->parseUrl();
        var_dump($bruh);
    }

    public function parseUrl()
    {
        if (isset($_GET['bruh'])) {
            // menghilangkan '/' diakhir url
            $url = rtrim($_GET['bruh']);
            // memfilter url dari karakter random
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // memecah url delimiter: '/' dan mengkonversi string2 menjadi elemen array index
            $url = explode('/', $url);

            return $url;
        }
    }

}
