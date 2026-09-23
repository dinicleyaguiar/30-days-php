<?php

namespace veiculo;

use veiculo\EngineTrait;

class Moto {
    use EngineTrait;

    public function empinar() {
        echo "Empinando...";
    }
}
