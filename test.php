<?php
/* Mysql Data */
$MySqlUser = "root";
$MySqlPass = "";
$MySqlHost = "localhost";
$MySqlDataBase = "banhang";
/* End Mysql Data */
function MySqlConnect($MySqlUser, $MySqlPass, $MySqlHost, $MySqlDataBase ) {
    $Connect = mysql_connect($MySqlHost, $MySqlUser, $MySqlPass);
    $Database = mysql_select_db($MySqlDataBase);
    if (!$Connect | !$Database) {
        die("Cannot connect ".mysql_error());
    }
    return $Database;
}
$Database = MySqlConnect($MySqlUser, $MySqlPass, $MySqlHost, $MySqlDataBase );
?>