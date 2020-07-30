<?php
//Pega as teclas digitadas no teclada e inclui no arquivo
$teclado = trim(fgets(STDIN));
file_put_contents('operacional.txt', $teclado, FILE_APPEND);

//Joga pra tela
$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);