<?php
class payment
{
    public $payment_id;
    public $user_id;
    public $status;


    public function __construct( $payment_id= "", $user_id = "", $status = "")
    {


 
        
        $this->payment_id = mysqli_real_escape_string($GLOBALS['conn'], $payment_id);
        $this->user_id = mysqli_real_escape_string($GLOBALS['conn'], $user_id);
        $this->status = mysqli_real_escape_string($GLOBALS['conn'], $status);
        
    }
    public function toString()
    {
        return "payment[payment_id = " . $this->payment_id . "]";
    }
}
