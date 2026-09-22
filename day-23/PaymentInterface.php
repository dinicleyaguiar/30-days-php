<?php
interface PaymentInterface {
    public function processPayment(float $amount): bool;
    public function getPaymentDetails(): string;
}
