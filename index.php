<?php

header("Refresh: 3, /bot");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Carregando JuniorBot</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

        <!-- Compiled and minified JavaScript 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script type="text/javascript" src="webcam.js"></script>
        <script type="text/javascript">
            //Configurando o arquivo que vai receber a imagem
            webcam.set_api_url('upload.php');

            //Setando a qualidade da imagem (1 - 100)
            webcam.set_quality(90);

            //Habilitando o som de click
            webcam.set_shutter_sound(true);

            //Definindo a função que será chamada após o termino do processo
            webcam.set_hook('onComplete', 'my_completion_handler');

            //Função para tirar snapshot
            function take_snapshot() {
                document.getElementById('upload_results').innerHTML = '<br/><br/><h5 style="color:#ecf0f1;">Carregando...</h5>';
                webcam.snap();
            }

            //Função callback que será chamada após o final do processo
            function my_completion_handler(msg) {
                if (msg.match(/(http\:\/\/\S+)/)) {
                    var htmlResult = '<br/><br/><h5 style="color:#ecf0f1;">Foto Tirada Com Sucesso !</h5><h6 style="color:#ecf0f1;">agora so falta o email</h6>';
                    htmlResult += '<input type="hidden" value="'+msg+'" name="foto">';
                    document.getElementById('upload_results').innerHTML = htmlResult;
                    webcam.reset();
                }
                else {
                    alert("PHP Erro: " + msg);
                }
            }
        </script>-->
    </head>
    <body style="background: #1abc9c;"><center><br/>
    <img src="http://jrobertodesigner.comeze.com/img/loading.gif" alt="Carregamento" style="width: 200px;height: 200px;margin-top: 200px;">
    <!--
    <div style="width: 150px;height: 40px;background: #3498db;margin-right: 650px;border-top-right-radius: 50px;border-top-left-radius: 50px;margin-top: 80px;cursor: pointer;"></div>
    <div style="width: 400px;height: 80px;background: #3498db;border-top-right-radius: 100px;border-top-left-radius: 100px;margin-top: -80px;cursor: pointer;"></div>
    <div style="width: 80px;height: 80px;border-radius: 100%;background: #2980b9;
    float:left;margin-left:300px;margin-top: 5px;cursor: pointer;"></div>
     <div style="width: 1000px;height: 550px;background: #3498db;border-radius: 100px;cursor: pointer;"><center><br/><br/><br/><br/><br/>
       <div style="width: 410px;height: 410px;background: #2980b9;border-radius: 100%;cursor: pointer;">
        <center><br/><br/><br/><br/>
         <script type="text/javascript">
            //Instanciando a webcam. O tamanho pode ser alterado
            document.write(webcam.get_html(320, 240));
         </script>
        </center>
       </div></center></div><center></center>
        <form>
         <div style="height: 200px;width:200px;margin-right: -700px;margin-top: -350px;">
            <input type=button value="Configurar" onClick="webcam.configure()" class="waves-effect waves-light btn"><br/><br/>
            &nbsp;&nbsp;
            <input type=button value="Tirar Foto" onClick="take_snapshot()" class="waves-effect waves-light btn"><br/><br/>
            &nbsp;&nbsp;
            <input type=button value="Reset" onClick="webcam.reset()" class="waves-effect waves-light btn">
            </div>
        </form>
        <form action="verif.php" method="post">
        <div id="upload_results"></div>
        <br/><br/><br/><br/><br/><br/>

   <div class="row">
    
      <div class="row">
        <div class="input-field col s12"><br/><br/>
          <input id="email" type="email" class="validate" style="width: 500px;" name="email" placeholder="Email">
        </div>
      </div>
    
  </div>

        <input type="submit" class="waves-effect waves-light btn" value="Continuar">
        </form>
        <br/><br/><br/>
        </center>
        -->
    </body>
</html>







