<?php
require 'PaymentInterface.php';
require 'AbstractPayment.php';

class CreditCard extends AbstractPayment implements PaymentInterface {
    private string $cardNumber;
    private string $expirationDate;

    public function __construct(string $cardNumber, string $expirationDate) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function validateTransaction(): bool {
        // Validação simplificada
        return strlen($this->cardNumber) >= 16 && strtotime($this->expirationDate) > time();
    }

    public function processPayment(float $amount): bool {
        if ($this->validateTransaction()) {
            echo "Pagamento de R$" . $this->formatAmount($amount) . " realizado com cartão.";
            return true;
        }
        return false;
    }

    public function getPaymentDetails(): string {
        return "Cartão termina em " . substr($this->cardNumber, -4) . " | Vencimento: " . $this->expirationDate;
    }
}
