<?php
require_once("Database.php");
class School
{
	private $schoolname;
	private $schoolstreetname;
	private $database;
	
	function School()
	{

		$this->database = new Database('localhost', 'root', '');
		$this->database->connectdb();
		$this->database->select('skuulcheck');
		
	}
	function storeSchool($schoolname, $schoolstreetname)
	{
		$this->schoolname = $schoolname;
		$this->schoolstreetname = $schoolstreetname;
		$sql = "INSERT INTO `skuulcheck`.`school` (`schoolname`, `schoolstreetname`) VALUES ";
		$sql .= "('$this->schoolname', '$this->schoolstreetname') ";
		mysql_query($sql);
		$this->database->disconnectdb();
	}
	function removeSchool($schoolname)
	{
		$sql = "DELETE FROM `skuulcheck`.`school` WHERE ";
		$sql .= "`schoolname`='$schoolname'";
		mysql_query($sql);
		$this->database->disconnectdb();
	}
	function editSchool($formerschoolname, $currentschoolname)
	{
		$sql = "UPDATE `skuulcheck`.`school` SET `schoolname`='$currentschoolname' WHERE ";
		$sql .= "`schoolname`='$formerschoolname'";
		mysql_query($sql);
		$this->database->disconnectdb();
	}
	
}
$school = new School();
$school->storeSchool("Hadi International school","shockor");
//$school->removeSchool("University of Ghana");
?>