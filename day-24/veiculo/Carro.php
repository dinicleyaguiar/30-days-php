<?php

namespace veiculo;

use veiculo\EngineTrait;

class Carro {
    use EngineTrait;

    public function ligar() {
        echo "Carro ligado.";
    }
}
