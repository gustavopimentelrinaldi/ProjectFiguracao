<?php

$server     = "mysql.hostinger.com.br";
$username   = "u707655120_roott";
$password   = "fbd3f721";
$db         = "u707655120_dbcli";

// create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// check connection
if( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
}

?>
