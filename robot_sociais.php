<?php
    
    // COMANDO REDES SOCIAIS

    if ($comando == "google") {
    	echo "<h1>Voce escolheu Google</h1>";
    	header("Refresh:4, http://google.com");
    }
    elseif ($comando == "facebook") {
    	echo "<h1>Voce escolheu Facebook</h1>";
    	header("Refresh:4, https://facebook.com.br");
    }
    elseif ($comando == "twitter") {
    	echo "<h1>Voce escolheu Twitter</h1>";
    	header("Refresh:4, https://twitter.com.br");
    }
    elseif ($comando == "whats") {
    	echo "<h1>Voce escolheu Whats</h1>";
    	header("Refresh:4, https://web.whatsapp.com.br");
    }
    elseif ($comando == "youtube") {
        echo "<h1>Voce escolheu Whats</h1>";
        header("Refresh:4, https://youtube.com.br");
    }
    else{
        echo "Nenhum comando foi excecutado !";
    }

?>