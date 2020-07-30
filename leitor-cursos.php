<?php
//Abre um arquivo
$file = fopen('texto.txt', 'r');
//Percorre linha a linha e mostra ela
while (!feof($file)) {
    echo fgets($file);
}
//Fecha o arquivo
fclose($file);

//Abre um arquivo
$file = fopen('texto.txt', 'r');
//Pega o tamanho do arquivo
$tamanho = filesize('texto.txt');
//Le o arquivo todo de uma vez,
// pode causar muita perda na memória por isso não é aconselhado usar a menos que esteja usando generators
$cursos = fread($file, $tamanho);

echo $cursos;
//Fecha o arquivo
fclose($file);

//Faz tudo que foi feito em cima com uma função
$texto = file_get_contents('texto.txt');
echo $texto;

//Coloca cada linha em um indice de um array
$array = file('texto.txt');
var_dump($array);