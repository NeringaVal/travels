<?php

clas DB {

    public $conn;

    public function __construct ()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db ="webkurasi_travels";
        $yhis->conn = new mysqli($servername, $username, $password, $db);
    }









}
?>