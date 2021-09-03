<?php
class category
{

    public $category_id;
    public $category_name;
    public $user_id;

    public function __construct($category_id = "", $category_name = "", $user_id = "")
    {


        $this->category_id = mysqli_real_escape_string($GLOBALS['conn'], $category_id);
        $this->category_name = mysqli_real_escape_string($GLOBALS['conn'], $category_name);
        $this->user_id = mysqli_real_escape_string($GLOBALS['conn'], $user_id);
    }
    public function toString()
    {
        return "category[category_id = " . $this->category_id . ",category_name=" . $this->category_name . "]";
    }
}
