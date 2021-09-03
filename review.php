<?php
class review
{
    public $review_id;
    public $product_id;
    public $comment;
    public $user_id;
   


    public function __construct( $review_id= "", $product_id= "",  $comment = "",$user_id = "",)
    { 
        $this->review_id = mysqli_real_escape_string($GLOBALS['conn'], $review_id);
        $this->product_id = mysqli_real_escape_string($GLOBALS['conn'], $product_id);
        $this->comment = mysqli_real_escape_string($GLOBALS['conn'], $comment);
        $this->user_id = mysqli_real_escape_string($GLOBALS['conn'], $user_id);
       
        
    }
    public function toString()
    {
        return "review[review_id = " . $this->review_id . "]";
    }
}
