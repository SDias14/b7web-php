<?php

$image = imagecreatetruecolor(200, 200); //isso cria uma imagem de 200x200 pixels. uso da biblioteca GD. fica salvo na memória do servidor.

imagefill($image, 0, 0, imagecolorallocate($image, 255, 0, 0)); //preenche a imagem com a cor branca

header("Content-type: image/png"); //define o tipo de arquivo que será gerado

imagejpeg($image,'novaImagem.jpg', 100); //gera a imagem




?>