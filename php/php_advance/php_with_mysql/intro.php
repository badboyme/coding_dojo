<?php 
// 1. connecting with MySQL
// 2. including files
// 3. database communication
// 4. login and registration
// 5. MySQL injection

define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass');
define('db_database', 'people');

$connection = new mysql(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if ($connection -> connect_errno) {
	# code...
}



?>