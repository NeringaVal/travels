<?php

include "./models/DB.php";

class Travel {
    public $price;
    public $travelTitle;
    public $organized;

    public function __construct ($id = null, $price = null, $travelTitle = null, $organized = null)
    {
        $this->id = $id;
        $this->price = $price;
        $this->travelTitle = $travelTitle;
        $this->organized = $organized;
    }


    public static function all()
    {
        $travels = [];
        $db = new DB();
        $query = "SELECT * FROM `travels`";
        $result =$db->conn->query($query);
        
        while ($row =$result->fetch_assoc()){
            $travels[] = new Travel( $row['id'], $row['price'], $row['travel_title'], $row['organized']);   
        }

        $db->conn->close();
        return $travels;
    }

    public static function create()
    {
       $db = new DB();
       $isOrganized = (isset($_POST[`isOrganized`])) ? "1" : "0";
       $stmt = $db->conn->prepare("INSERT INTO `travels`(`id`, `price`, `travel_title`, `organized`) VALUES (null,?,?,?)");
       $stmt->bind_param("dsi", $_POST[`price`], $_POST[`Title`], $isOrganized);
       $stmt->execute();
       $stmt->close();
       $db->conn->close();
    }



}

?>