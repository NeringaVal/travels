<?php 

include "./models/Travel.php";

class TravelController {

    public static function index()
    {
        $travels = Travel::all();
        return $travel;
    }

}











?>