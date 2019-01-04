<?php

require 'Task.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'functions.php';

$pdobj = Connection::make();

$query = new QueryBuilder($pdobj);

$tasks1 = fetchAllTasks($pdobj); 		// rename to tasks when test
$tasks = $query::selectAll('todos'); 	// rename to tasks1 when need to test other

require 'index.view.php';

?>