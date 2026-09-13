<?php
// Exibe o cookie se existir
if (isset($_COOKIE['usuario'])) {
    echo '<p>Cookie salvo: ' . htmlspecialchars($_COOKIE['usuario']) . '</p>';
} else {
    echo '<p>Nenhum cookie encontrado.</p>';
}
?>