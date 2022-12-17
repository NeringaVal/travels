<?php 

include "./models/Travel.php";

class TravelController {

    public static function index()
    {
        $travels = Travel::all();
        return $travels;
    }

    public static function show()
    {
        $travel = Travel::find($_GET['id']);
        return $travel;
    }

    public static function store()
    {
        //validacija
        Travel::create();
    }
    public static function update()
    {
        $travel = new Travel();
        $travel->id = $_POST['id'];
        $travel->travelTitle = $_POST['title'];
        $travel->price = $_POST['price'];
        $travel->organized = $_POST['isOrganized'];
        $travel->update();
    }
    public static function destroy()
    {
        //validacija
        Travel::destroy($_POST['id']);
        
    }






}


?>