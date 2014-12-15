<?php
/* Specify the server and connection string attributes. */
$serverName = "163.180.73.62, 108";

/* Get UID and PWD from application-specific files.  */
$uid ="root";
$pwd = "1q2w3e4r";
$connectionInfo = array( "UID"=>$uid,
    "PWD"=>$pwd,
    "Database"=>"journeyon_china");

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false )
{
    echo "Unable to connect.</br>";
    die( print_r( sqlsrv_errors(), true));
}
else
{
    echo "connect!!!!!!!!.</br>";
}
?>

test
