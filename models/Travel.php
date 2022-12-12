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



}

?>