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
        $isOrganized = (isset($_POST['isOrganized'])) ? "1" : "0";
        $travel = new Travel();
        $travel->id = $_POST['id'];
        $travel->travelTitle = $_POST['Title'];
        $travel->price = $_POST['price'];
        $travel->organized = $isOrganized;
        $travel->update();
    }   
    public static function destroy()
    {
        //validacija
        Travel::destroy($_POST['id']);        
    }
}
?>