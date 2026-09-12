# Dia 13 — Day 13: Exercício de sessões - Login e página protegida

Trilha: PHP  
Nível: intermediário  
Tema: Sessões

## Objetivo

Aprender a usar sessões para armazenar dados do usuário entre requisições

## Conceito

Crie um sistema simples de login que armazena o status de autenticação em uma sessão. A página protegida só deve ser acessada após o login bem-sucedido.

## Desafio

Implemente a lógica de autenticação com sessões e valide o acesso à página protegida

## Pontos principais

- Uso de session_start() para iniciar sessões
- Armazenamento de dados em $_SESSION
- Validação de dados de sessão
- Destruindo sessões com session_destroy()

## Verificação

- PHP lint OK: login.php
- PHP lint OK: logout.php
- PHP lint OK: protected.php
