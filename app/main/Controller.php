<?php

class Controller {

    public function view($view, $data = []) {
        require_once('../app/views/' . $view . '.php');
    }

    // public $conn;

    // // DB connection
    // public function __construct() {
    //     $servername = "localhost:8080";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "domestic_ex";

    //     $this->conn = new mysqli($servername, $username, $password, $dbname);
    // }

    // public function countEvent() {
    //     $sql = mysqli_fetch_array($this->conn, "SELECT * FROM event");
    //     return count($sql);
    // }

}