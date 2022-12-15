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

$checked = "";
if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['edit'])){
        $travel = TravelController::show();
        if($travel->organized){
            $checked = "checked";
        }
    }

}


$travels = TravelController::index();







?>