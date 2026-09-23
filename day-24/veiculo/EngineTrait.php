<?php

namespace veiculo;

trait EngineTrait {
    public function acelerar($velocidade) {
        echo "Acelerando a $velocidade km/h";
    }

    public function freiar() {
        echo "Freiando...";
    }
}