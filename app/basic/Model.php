<?php

namespace app\basis;

use app\lib\Database;

abstract class Model 
{

	public $database;
	
	public function __construct()
	{
		$this->database = new Database;
	}
}


?>