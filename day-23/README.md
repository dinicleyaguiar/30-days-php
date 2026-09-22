# Dia 23 — Day 23: Interfaces e classes abstratas - Sistema de pagamento

Trilha: PHP  
Nível: avançado  
Tema: Interfaces e classes abstratas

## Objetivo

Implementar um sistema de pagamento com interfaces e classes abstratas para garantir consistência entre diferentes métodos de pagamento.

## Conceito

Crie uma estrutura que defina um contrato comum para métodos de pagamento (interface) e uma classe abstrata que ofereça comportamento padrão. Implemente classes concretas para cartão de crédito e PayPal.

## Desafio

Garanta que todas as classes de pagamento sigam a interface definida e herdem comportamentos da classe abstrata.

## Pontos principais

- Uso de interfaces para definir contratos
- Classes abstratas com métodos concretos e abstratos
- Polimorfismo em operações de pagamento

## Verificação

- PHP lint OK: AbstractPayment.php
- PHP lint OK: CreditCard.php
- PHP lint OK: PaymentInterface.php
- PHP lint OK: PayPal.php
