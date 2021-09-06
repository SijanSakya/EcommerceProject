<?php
class user
{

	public $user_id;
	public $username;
        public $email;
	public $password;
        public $address;
        public $phone_number;



	public function __construct($user_id = "", $username = "",$email = "", $password = "",$address = "",$phone_number = "")
	{

		$this->user_id = mysqli_real_escape_string($GLOBALS['conn'], $user_id);
		$this->username = mysqli_real_escape_string($GLOBALS['conn'], $username);
		$this->email = mysqli_real_escape_string($GLOBALS['conn'], $email);
		$this->password = mysqli_real_escape_string($GLOBALS['conn'], $password);
		$this->address = mysqli_real_escape_string($GLOBALS['conn'], $address);
		$this->phone_number = mysqli_real_escape_string($GLOBALS['conn'], $phone_number);
	}

	public function toString()
	{
		return "user[user_id = " . $this->user_id . ",username=" . $this->username . "]";
	}

	//user
	public function create_user()
    {
		$sql = "INSERT INTO `user` (`username`,`email`,`password`,`address`,`phone_number`) 
		VALUES ( '$this->username','$this->email','$this->password','$this->address','$this->phone_number')";
		// print_r($sql);
		// die;
		$result = mysqli_query($GLOBALS['conn'], $sql);
		if (!$result) {
			echo "Error" . mysqli_error($GLOBALS['conn']) . "<br>";
			return false;
		}
		return true;
	}

	public function read_user()
	{
		
		$sql = "SELECT * FROM `user` WHERE
		 `email` = '$this->email' AND `password` = '$this->password' ";
		$result = mysqli_query($GLOBALS['conn'], $sql);
		
		// print_r($sql);
		// die;
		if ($result) {
           
                return true;
            } else {
            }
        } else {
            return false;
        }
    }
	



	public function update_user()
	{
		$sql = "UPDATE `user`
	SET `username` = '$this->username', `password` = '$this->password' WHERE `user_id` = '$this->user_id'";
		$result = mysqli_query($GLOBALS['conn'], $sql);
		if (!$result) {
			echo "Error" . mysqli_error($GLOBALS['conn']) . "<br>";
		}
	}
	public function delete_user()
	{
		$sql = "DELETE FROM `user` WHERE `user_id` = '$this->user_id '";
		$result = mysqli_query($GLOBALS['conn'], $sql);
		if (!$result) {
			echo "Error" . mysqli_error($GLOBALS['conn']) . "<br>";
		}
	}

    
//category

}
