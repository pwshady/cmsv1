<?

namespace app\lib;

use PDO;

class Database
{

	public $database;

	/**
	 * The construct database connect.
	 */
	public function __construct()
	{
		$config = require 'app/config/database_config.php';
		try {
			$this->database = new PDO ('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['pass']);
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage();
			die();
		}
	}

	/**
	 * The function imports the available rows to and from the table.
	 * @param Table name. Default - "". Format: string.
	 * @param Access level. Default - 0, all rows. Format: integer.
	 */
	public function getTableAccess(string $nameTable = "", int $accessLevel = 0)
	{
		$stmt = $this->database->prepare("SELECT * FROM " . $nameTable . " WHERE access_level = :accessLevel");
		$stmt->bindValue(":accessLevel", $accessLevel);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}



}
