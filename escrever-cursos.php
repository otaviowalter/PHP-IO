<?php
// Abrir arquivo
$curso = fopen('operacional.txt', 'a');
//Escreve no arquivo
fwrite($curso, "Admissão Operacional:");
fclose($curso);

file_put_contents('operacional.txt', "\nAdmissão Operacional:", FILE_APPEND);