<?php include "./routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./views/components/head.php" ?>
</head>
<body>
    <header> 
    <nav class="navbar navbar-expand-lg bg-light">
        <?php include "./views/components/nav.php" ?>
    </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-6 mb-4 mt-4" >
                <form action="" method="post">
                    <div class="form-group">
                        <label>Kelionės pavadinimas</label>
                        <input type="text" class="form-control" name="Title" placeholder="Pvz Londonas" value="<?=(isset($_GET['edit'])) ? $travel->travelTitle : ""?>">
                    </div>
                    <div class="form-group">
                        <label">Kaina</label>
                        <input type="number" class="form-control" name="price" placeholder="Pvz 100.00" value="<?=(isset($_GET['edit'])) ? $travel->price : ""?>">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" <?=$checked?> class="form-check-input" name="isOrganized" id="travel">
                        <label class="form-check-label" for="travel" >Ar šiuo metu vykdoma</label> 
                    </div>
                    <?php if(!isset($_GET['edit'])) {?>
                        <button class="btn btn-success" name="save" type="submit" >Išsaugoti</button>
                    <?php } else {?>
                        <input type="hidden" name="id" value="<?=$travel->id?>">
                        <button class="btn btn-primary" name="update" type="submit" >Atnaujinti</button>
                    <?Php } ?>
                </form> 
            </div>
            <div class="col-6"></div>
        </div>  
        <table class="table">
        <?php include "./views/components/table.php"; ?>
        </table>
    </div>
</body>
</html>