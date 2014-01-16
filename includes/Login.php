<?php
require_once("Database.php");
class Login
{
	private $name, $password;
	function Login($name, $password)
	{
		$this->name = $name;
		$this->password = $password;
	}
	function isLoggedin()
	{
		$database = new Database('localhost', 'root', '');
		$database->connectdb();
		$database->select('skuulcheck');
		$sql = "SELECT * FROM `users` WHERE `name`='$this->name' AND `password`='$this->password'";
		$result = mysql_query($sql);
		while ($rs = mysql_fetch_array($result)) 
		{
			if (mysql_num_rows($result) == 1) 
			{
				$database->disconnectdb();
				return true;
			}else
			{
				$database->disconnectdb();
				return false;
			}
		}
		return false;
	}
}

$text = new Login("Alfred","password");
if($text->isLoggedin())
{
	echo "yes ";
}else{
	echo "no";
}

?>