<?php
require_once("Database.php");
class School
{
	private $schoolname;
	private $schoolstreetname;
	
	
	function School($schoolname, $schoolstreetname)
	{
		$this->schoolname = $schoolname;
		$this->schoolstreetname = $schoolstreetname;
	}
	function storeSchool()
	{
		$database = new Database('localhost', 'root', '');
		$database->connectdb();
		$database->select('skuulcheck');
		$sql = "INSERT INTO `skuulcheck`.`school` (`schoolname`, `schoolstreetname`) VALUES ";
		$sql .= "('$this->schoolname', '$this->schoolstreetname') ";
		mysql_query($sql);
		$database->disconnectdb();
	}
	
}
$school = new School("Hadi","10245032");
$school->storeSchool();
?>