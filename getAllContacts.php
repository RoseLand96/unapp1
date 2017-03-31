<?php
$db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "wy8olcrbdohq8vub";
$db_user = "hx09anllb8j1tlyz";
$db_password = "wynpitkcrhqf6u3z";
    
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM calendario;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>