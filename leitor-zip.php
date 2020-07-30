<?php
//Mandando um contexto, nesse caso a senha do arquivo ZIP
$contexto = stream_context_create([
    'zip' => [
        'password' => '123'
    ]
]);

echo file_get_contents(
    'zip://projeto.zip#texto.txt',
    false,
    $contexto
);