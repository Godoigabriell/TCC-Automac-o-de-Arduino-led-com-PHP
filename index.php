<?php
  if($_REQUEST["matriz"] != "")
  {
    switch ($_REQUEST["matriz"])
    {
      case "Letra"    : $acao = "1"; break;
      case "Baska"    : $acao = "2"; break;
      case "Xs"       : $acao = "3"; break;
      case "Oi"       : $acao = "4"; break;
      case "Joia"     : $acao = "5"; break;
      case "Emoji"    : $acao = "6"; break;
      case "Quadrado" : $acao = "7"; break;
      case "Heart"    : $acao = "8"; break;
      case "Limpo"    : $acao = "0"; break;
    }
    $conexaoArduino = fopen("COM6", "w");
    fwrite($conexaoArduino, $acao);
    fclose($conexaoArduino);
  }
 ?>

 <html lang="pt-br" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>G4 - TCC - DS - Rosa Perrone</title>
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
   </head>
   <body>
         <center><h1><img src="img/cps.png">  ETEC Rosa Perrone Scavone  <img src="img/gsp.png"></h1></center>
     <div>
         <form action="index.php" method="GET">
         <strong><center><label><u>MENU</u></label></center></strong>
         </br></br>
         <img src="img/coracao.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="img/joinha.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="img/quadrado.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="img/letras.png">
       </br></br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoHeart" value="Heart">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoJoia" value="Joia">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoQuadrado" value="Quadrado">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoLetra" value="Letra">
       </br></br></br>
         <img src="img/xis.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="img/basket.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="img/emoji.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <img src="img/oi.png">
       </br></br>\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoXs" value="Xs">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoBaska" value="Baska">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoEmoji" value="Emoji">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" name="matriz" id="botaoOi" value="Oi">
       </br></br></br></br>
         <center><input type="submit" name="matriz" id="botaoLimpo" value="Limpo"></center>
         </form>
       </form>
     </div>
       </br><center><h5>Gabriel Godoi dos Santos </br> Geovana Raquel Souza Barbosa Mariano </br> Iris Maria de Oliveira Bernardo</h5></center>
   </body>
   </html>
