<?php  

if(isset($_POST['pe'])){

$comando = addslashes($_POST['pe']);

if(strstr($comando, "abrir")){
	include_once 'robot_sociais.php';
}
}

?>