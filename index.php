<?php
header('Content-Type: application/json; charset=utf-8');

header('Access-Control-Allow-Origin: *');


$usuarios = [
    [
        'id' => 1,
        'nome' => 'luis o pinho',
        'email' => 'pinho@exemplo.com'
    ],
    [
        'id' => 2,
        'nome' => 'Maria pinho',
        'email' => 'mariapinho@exemplo.com'
    ],
    [
        'id' => 3,
        'nome' => 'Ana pinha',
        'email' => 'anapinho@exemplo.com'
    ]
];

$json_response = json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo $json_response;

?>


