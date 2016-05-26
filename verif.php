<?php 

if (isset($_POST['foto'])){
	if (isset($_POST['email'])) {
	
	// CRIPTOGRAFANDO DADOS 258 BITS

    // FOTO

	$foto = $_POST['foto'];
    $email = $_POST['email']);
    
    // GERANDO TOKEN 

    $criptFotoUm = md5(mt_rand());
    $criptFotoDois = crypt($recebeFotoUm);
    $criptFotoTres = sha1($criptFotoDois);
    $criptFotoQuatro = hash("sha256", $criptFotoTres);
    $criptFotoCinco = hash("sha512", $criptFotoQuatro);
    $criptFotoSeis = substr($criptFotoCinco,0,30);
    $criptFotoSete = strtolower($criptFotoSeis);
    $token = $criptFotoSete;

    // CRIPTOGRAFANDO EMAIL

    /*$recebeEmail = $_POST['email'];
    $criptEmailUm = crypt($recebeEmail);
    $criptEmailDois = md5($criptEmailUm);
    $criptEmailTres = sha1($criptEmailTres);
    $criptEmailQuatro = hash("sha256", $criptEmailTres);
    $criptEmailCinco = hash("sha512", $criptEmailQuatro);
    $email = $criptEmailCinco;*/

    // verifica se ja existe
    
    echo "Token :".$token."<br/>Email :".$email."<br/>Foto :".$foto;
}else{
	echo "Ocorreu um erro !";
}
}else{
	echo "Ocorreu um erro !";
}

?>