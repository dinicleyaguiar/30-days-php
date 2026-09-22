<?php
abstract class AbstractPayment {
    protected string $currency = 'BRL';

    abstract public function validateTransaction(): bool;

    public function formatAmount(float $amount): string {
        return number_format($amount, 2, ',', '.');
    }
}
