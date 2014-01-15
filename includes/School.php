<?php
require_once("Database.php");
class School
{
	private $name;
	private $id;
	private $district;
	private $region;
	
	function School($name, $id, $district, $region)
	{
		$this->name = $name;
		$this->id = $id;
		$this->district = $district;
		$this->region = $region;
	}
	function storeSchool()
	{
		$database = new Database('localhost', 'root', '');
		$database->connectdb();
		$database->select('skuulcheck');
		$sql = "INSERT INTO `skuulcheck`.`school` (`id`, `name`, `district`, `region`) VALUES ";
		$sql .= "('$this->id', '$this->name', '$this->district', '$this->region') ";
		mysql_query($sql);
		$database->disconnectdb();
	}
	
}
$school = new School("alfreda","10277032","Accra","Greater Accra");
$school->storeSchool();
?>