<?php
// Loop for: imprimir números de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i<br>";
}

// Loop while: contar de 10 a 0
$j = 10;
while ($j >= 0) {
    echo "Contagem: $j<br>";
    $j--;
}

// Array para foreach
$nums = [11, 22, 33, 44, 55];
foreach ($nums as $num) {
    echo "Valor do array: $num<br>";
}
