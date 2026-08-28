<?php
// Exercício 2: Menu com switch
$opcao = readline('Escolha uma opção (1, 2 ou 3): ');

switch ($opcao) {
    case '1':
        echo "Você escolheu a opção 1.";
        break;
    case '2':
        echo "Você escolheu a opção 2.";
        break;
    case '3':
        echo "Você escolheu a opção 3.";
        break;
    default:
        echo "Opção inválida.";
}
