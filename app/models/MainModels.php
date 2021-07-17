<?php

namespace app\models;

use app\basis\Model;
use PDO;

class MainModels extends Model
{
	
	public function getNews()
	{
		$stmt = $this->database->getTableAccess("basic_menu", 1);
		//while ($row = $stmt->fetch())
//{
  //echo '<pre>';
  //print_r($row);
//}
		//debug($stmt);
		return $stmt;
	}

	public function getMenu()
	{
		$stmt = $this->database->getTableAccess("basic_menu", 1);
		$content = "";
		for ($i = 0; $i < count($stmt); $i++){
			print_r("<p>" . $stmt[$i]["name"] . "</p>");
		};
		return $content;
	}
}


?>