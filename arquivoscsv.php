<?php


$meusCursos = file('operacional.txt');
$outrosCursos = file('texto.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);
