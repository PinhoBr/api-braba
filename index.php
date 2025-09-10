<?php
header('Content-Type: application/json; charset=utf-8');

header('Access-Control-Allow-Origin: *');


$usuarios = [
    [
        'id' => 1,
        'nome' => 'Carlos a Silva',
        'email' => 'carlos@exemplo.com'
    ],
    [
        'id' => 2,
        'nome' => 'Maria PINHO',
        'email' => 'maria@exemplo.com'
    ],
    [
        'id' => 3,
        'nome' => 'Ana Souza',
        'email' => 'ana@exemplo.com'
    ]
];

$json_response = json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo $json_response;

?>

