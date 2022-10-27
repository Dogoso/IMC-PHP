<?php

    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if($nome == '' || $peso == '' || $altura == '') {
        header('Location: /erro.html');
    }

    $imc = $peso / ($altura * $altura);

    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Sucesso!</title></head><body>';
    print_r('<h1>' . $nome . '</h1>');
    print_r('<p>Altura de: ' . $altura . '</p>');
    print_r('<p>Peso de: ' . $peso . '</p>');
    print_r('<p>Seu resultado é:'. $imc .'</p>');
    echo '</body></html>';