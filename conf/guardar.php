<?php
$contador = count($_FILES["arquivos"]["name"]);
for ($i = 0; $i < $contador; $i++) {
    $arquivo = $_FILES["arquivos"]["tmp_name"][$i];
    $nomeArquivo = $_FILES["arquivos"]["name"][$i];
    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
    // Renomeia o arquivo
    $novoNome = sprintf("%s_%d.%s", uniqid('', true), $i, $extensao);
    // Mover do diretório temporário para o atual
    move_uploaded_file($arquivo, "../arquivos/".$novoNome);
}
// Responder ao usuário
echo json_encode(true, JSON_THROW_ON_ERROR);