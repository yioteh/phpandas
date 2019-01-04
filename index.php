<?php

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'functions.php';

$pdobj = Connection::make();

// $tasks = fetchAllTasks($pdobj);		// uncomment this and comment out 2 and 3 to check old code

$query = new QueryBuilder($pdobj);		// 2

$tasks = $query->selectAll('todos'); 	// 3

require 'index.view.php';

?>