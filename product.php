<?php
class product
{
    public $product_id;
    public $price;
    public $image;
    public $user_id;
    public $category_id;
    public $detail;
  


    public function __construct( $product_id= "", $price = "", $image = "", $user_id = "", $category_id = "", $detail = "")
    {


 
        
        $this->product_id = mysqli_real_escape_string($GLOBALS['conn'], $product_id);
        $this->price = mysqli_real_escape_string($GLOBALS['conn'], $price);
        $this->image = mysqli_real_escape_string($GLOBALS['conn'], $image);
        $this->user_id = mysqli_real_escape_string($GLOBALS['conn'], $user_id);
        $this->category_id = mysqli_real_escape_string($GLOBALS['conn'], $category_id);
        $this->detail = mysqli_real_escape_string($GLOBALS['conn'], $detail);
        
    }
    public function toString()
    {
        return "product[product_id = " . $this->product_id . "]";
    }
}
