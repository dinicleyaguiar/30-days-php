<?php

function calcularDesconto($preco, $percentual) {
    $desconto = $preco * ($percentual / 100);
    return $preco - $desconto;
}
