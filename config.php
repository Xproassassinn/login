<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql9.freemysqlhosting.net	');
define('DB_USERNAME', '	sql9369793');
define('DB_PASSWORD', 'BgvEMNbUQf');
define('DB_NAME', '	sql9369793');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>