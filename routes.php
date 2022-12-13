<?php include "./controllers/TravelController.php";




if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['save'])){
        
        TravelController::store(); 
        header("Location: ./index.php");
        die;   
       
    }

    if(isset($_POST['update'])){
        TravelController::update(); 
        header("Location: ./index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        TravelController::destroy(); 
        header("Location: ./index.php");
        die;
    }
    
}

if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['edit'])){
        $travels = TravelController::show();
    }

}


$travels = TravelController::index();







?>