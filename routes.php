<?php include "./controllers/TravelController.php";




if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['save'])){
       TravelController::store(); 
    }

    if(isset($_POST['update'])){
       
    }

    if(isset($_POST['destroy'])){
        
    }
    
}


$travels = TravelController::index();







?>