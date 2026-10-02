# Dia 28 — Day 28: Implementação de registro com validação, sanitização e prepared statements

Trilha: PHP  
Nível: avançado  
Tema: Segurança: validação, sanitização e prepared statements

## Objetivo

Criar um sistema de registro de usuários com validação de entrada, sanitização de dados e uso de prepared statements para prevenir injeção SQL.

## Conceito

Este exercício demonstra como lidar com entradas de usuários de forma segura. Primeiro validamos e sanitizamos os dados, depois usamos prepared statements para inserir no banco de dados.

## Desafio

Implementar um formulário de registro com validação de campos, sanitização de dados e inserção segura no banco de dados.

## Pontos principais

- Validação de entradas de usuário
- Sanitização de dados com filter_var
- Uso de prepared statements com PDO
- Hashing de senhas com password_hash

## Verificação

- PHP lint OK: register.php
