<?php

$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "covid";
$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
    
function connect(){
	$host_mysql = "localhost";
	$user_mysql = "root";
	$pass_mysql = "";
	$db_mysql = "covid";

 	$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

	return $mysqli;
}


function clear($var){
	htmlspecialchars($var);

	return $var;
}



function redir($var){
	?>
	<script>
		window.location="<?=$var?>";
	</script>
	<?php
	die();
}

function alert($var){

	//"error", "success" and "info".
	?>
	<script type="text/javascript">
		alert("<?=$var?>");
	</script>
	<?php

}

function admin_name_connected(){
	include "config.php";
	$id = $_SESSION['id'];
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM admins WHERE id = '$id'");
	$r = mysqli_fetch_array($q);

	return $r['name'];

}



function check_admin(){
	if(!isset($_SESSION['ID'])){
		redir("./");
	}
	

}



?>