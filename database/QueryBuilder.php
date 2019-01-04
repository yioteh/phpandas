<?php

class QueryBuilder
{
	public $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public static function selectAll($table)
	{
		$statement = $this->$pdo->prepare("select * from {$table}");
		
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}