<?php
class orders
{

    public $orders_id;
    public $product_id;
    public $user_id;
    public $payment_id;


    public function __construct($orders_id = "", $product_id = "", $user_id = "", $payment_id= "")
    {


        $this->orders_id = mysqli_real_escape_string($GLOBALS['conn'], $orders_id);
        $this->product_id = mysqli_real_escape_string($GLOBALS['conn'], $product_id);
        $this->user_id = mysqli_real_escape_string($GLOBALS['conn'], $user_id);
        $this->payment_id = mysqli_real_escape_string($GLOBALS['conn'], $payment_id);
    }
    public function toString()
    {
        return "orders[orders_id = " . $this->orders_id . ",product_id=" . $this->product_id . "]";
    }
}
