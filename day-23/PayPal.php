<?php
require 'PaymentInterface.php';
require 'AbstractPayment.php';

class PayPal extends AbstractPayment implements PaymentInterface {
    private string $email;

    public function __construct(string $email) {
        $this->email = $email;
    }

    public function validateTransaction(): bool {
        // Validação simplificada
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function processPayment(float $amount): bool {
        if ($this->validateTransaction()) {
            echo "Pagamento de R$" . $this->formatAmount($amount) . " realizado via PayPal.";
            return true;
        }
        return false;
    }

    public function getPaymentDetails(): string {
        return "Email: " . $this->email . " | Moeda: " . $this->currency;
    }
}
