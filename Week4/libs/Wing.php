<?php

require_once('Payment.php');

class Wing extends Payment 
{

    public static $counter = 0; // track number of order through this static var

    public function __construct($product,$quantity,$method) 
    {
        $this->name = $product->name;
        $this->price = $product->price;
        $this->quantity = $quantity;
        $this->method = $method;
        $this->total = $product->price * $quantity;
          
        self::$counter++;
    }

    public function __destruct() 
    {
        self::$counter--;
    }
}

?>