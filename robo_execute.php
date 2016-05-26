<?php  

if(isset($_POST['tip'])){
if(isset($_POST['pe'])){

$tipo = addslashes($_POST['tip']);
$comando = addslashes($_POST['pe']);

echo $tipo."<br/>".$comando;

// ABRIR SITES

if(strstr($tipo, "abrir")){
	include_once 'comand/robot_sociais.php';
}

// PROCURAR NAS REDES

if(strstr($tipo, "procurar")){
	include_once 'comand/robot_procurar.php';
}

}
}

?>