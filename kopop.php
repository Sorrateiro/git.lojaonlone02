<?php
// salvar_pontos.php
$pontos = $_POST['pontos'];
$usuario = $_POST['usuario'];

// Exemplo simples (sem segurança, só ilustrativo)
file_put_contents("ranking.txt", "$usuario - $pontos\n", FILE_APPEND);
echo "Pontuação salva!";
?>