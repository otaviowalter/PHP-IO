<?php
//Abre arquivo
$conteudo = fopen('texto.txt', 'r');
//Aplica filtro, no caso coloca todo filtro em Uppercase
stream_filter_append($conteudo, 'string.toupper');

echo fread($conteudo, filesize('texto.txt'));