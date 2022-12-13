<?php 

include "./models/Travel.php";

class TravelController {

    public static function index()
    {
        $travels = Travel::all();
        return $travels;
    }

    public static function store()
    {
        //validacija
        Travel::create();
    }






}


?>