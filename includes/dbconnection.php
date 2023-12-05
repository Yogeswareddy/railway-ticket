<?php 
// DB credentials.
define('DB_HOST','yogi-mysql.mysql.database.azure.com');
define('DB_USER','rootuser');
define('DB_PASS','Yogi1234567890');
define('DB_NAME','rpmsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
