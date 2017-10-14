<?php
$host = "localhost";
$username = "root";
$password = "p@ssw@rd";
$database = "arxeiothetisi";

$link = mysqli_connect ( $host, $username, $password, $database );

if (! $link) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno () . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error () . PHP_EOL;
	exit ();
}

mysqli_query ( $link, "SET character_set_connection=utf8" );
mysqli_query ( $link, "SET character_set_client=utf8" );
mysqli_query ( $link, "SET character set 'utf8'" );
mysqli_query ( $link, "SET NAMES 'utf8'" );
?>
