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

    public static function find($id)
    {
        $travel = new Travel();
        $db = new DB();
        $stmt = $db->conn->prepare("SELECT * FROM `travels` where `id` = ? ");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row =$result->fetch_assoc()){
            $travel = new Travel( $row['id'], $row['price'], $row['travel_title'], $row['organized']);   
        }
        $stmt->close();
        $db->conn->close();
        return $travel;
    }

    public static function create()
    {
       $db = new DB();
       
       $stmt = $db->conn->prepare("INSERT INTO `travels`(`id`, `price`, `travel_title`, `organized`) VALUES (null,?,?,?)");
       $isOrganized = (isset($_POST['isOrganized'])) ? "1" : "0";
       $stmt->bind_param("dsi", $_POST['price'], $_POST['Title'], $isOrganized);
       $stmt->execute();
       $stmt->close();
       $db->conn->close();
    }
    public static function destroy()
    {
       $db = new DB();
       $stmt = $db->conn->prepare("DELETE FROM `travels` WHERE `id` = ?");
       $stmt->bind_param("i", $_POST['id']);
       $stmt->execute();
       $stmt->close();
       $db->conn->close();
    }
    public static function update()
    {
       $db = new DB();
       $stmt = $db->conn->prepare("DELETE FROM `travels` WHERE `id` = ?");
       $stmt->bind_param("i", $_POST['id']);
       $stmt->execute();
       $stmt->close();
       $db->conn->close();
    }


}

?>