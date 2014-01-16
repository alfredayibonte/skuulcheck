<?php
require_once("Database.php");
class Categories
{
	private $id;
	private $inclusive;
	private $teachlearn;
	private $safepro;
	private $healthy;
	private $commeng;
	private $gender;
	function Categories($id, $inclusive, $teachlearn, $safepro, $healthy, $commeng, $gender)
	{
		$this->id = $id;
		$this->inclusive = $inclusive;
		$this->teachlearn = $teachlearn;
		$this->safepro = $safepro;
		$this->healthy = $healthy;
		$this->commeng = $commeng;
		$this->gender = $gender;

	}
	public function storeCategory()
	{
		$database = new Database('localhost', 'root', '');
		$database->connectdb();
		$database->select('skuulcheck');
		$sql = "INSERT INTO `skuulcheck`.`categories` (`inclusive`, `teachlearn`, `safepro`, `healthy`, `commeng`, `gender`) VALUES ";
		$sql .= "('$this->inclusive', '$this->teachlearn', '$this->safepro', '$this->healthy', '$this->commeng', '$this->gender') ";
		mysql_query($sql);
		$database->disconnectdb();
	}
	
}
?>