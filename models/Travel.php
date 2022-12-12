<?php

class Travel {
    public $price;
    public $title;
    public $organized;

    public function __construct ($id = null, $price = null, $title = null, $organized = null)
    {
        this ->id = $id;
        this ->price = $price;
        this ->travelTitle = $title;
        this ->organized = $organized;
    }




}

?>