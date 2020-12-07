<?php
            
            $cid = '455827'; // CID da sua cidade, encontre a sua em http://hgbrasil.com/weather

            $dados = json_decode(file_get_contents('http://api.hgbrasil.com/weather/?cid='.$cid.'&format=json'), true); // Recebe os dados da API
               //000000 F5F5F5
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Previsão do Tempo Comporta autônoma </title>
    </head>
    <body bgcolor = "white"> 
    <font color = "black"> 
        <img src="imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br> 

            <?php         
           /* echo "<table border='2'>" .
                "<thead>" .
                "<tr>" . 
                "<td align=center><h2>" . $dados['results']['city'] . "</h2></td>" .
                "<td align=center><h2>" . $dados['results']['temp'] . "ºC" . "</h2></td>" .
                "</thead>" .
                "</tr>" .
                "<tr>" .
                "<td align=center><h2>" . $dados['results']['description'] . "</h2></td>" .
                "<td align=center><h2>" . "Nascer do Sol:" . " " . $dados['results']['sunrise'] . "</h2></td>" .
                 "</tr>" .
                 "<tr>" .
                "<td align=center><h2>"  . "Pôr do Sol:" . " " . $dados['results']['sunset'] . "</h2></td>" .
                "<td align=center><h2>" . "Velocidade do vento:" . " " . $dados['results']['wind_speedy'] . "</h2></td>" .
                "</tr>";
           */
           
      
       
        echo "<b>" . $dados['results']['city'] . " " . "</b>"; 
        echo "<b>" .  $dados['results']['temp'] . "ºC" . "<br>" . "</b>";
        echo "<b>" . $dados['results']['description'] . "<br>" . "</b>";
        echo "<b>" . "Nascer do Sol: " . $dados['results']['sunrise'] . "<br>" . "</b>";
        echo "<b>" . "Pôr do Sol: " . $dados['results']['sunset'] . "<br>" . "</b>";
        echo "<b>" . "Velocidade do vento: " . $dados['results']['wind_speedy'] . "<br>" . "</b>";
          
        
        ?>
        


    </body>
    </font>
</html>