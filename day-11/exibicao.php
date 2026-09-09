<?php
// Exibe resultado com base na validação
if (isset($valido)) {
  echo $valido ? '<p class="sucesso">' : '<p class="erro">';
  echo $mensagem;
  echo '</p>';
}
?>