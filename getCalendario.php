
<?php 
$db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "wy8olcrbdohq8vub";
$db_user = "hx09anllb8j1tlyz";
$db_password = "wynpitkcrhqf6u3z";
    
     $con =@mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());

$sql= "SELECT * FROM 'calendario'";
$result = mysql_query($sql, $con);
$json = array();

if(mysql_num_rows($result)){
	while($row=mysql_fetch_object($result)) {
		$json[]=$row;
	}
}
mysql_close($con);
echo json_decode($json);

?>

