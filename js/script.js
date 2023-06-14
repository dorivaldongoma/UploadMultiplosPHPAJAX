// Elementos do DOM
const $inputArquivos = document.querySelector("#inputArquivos"),
    $btnEnviar = document.querySelector("#btnEnviar"),
    $estado = document.querySelector("#estado");
$btnEnviar.addEventListener("click", async () => {
    const arquivosParaSubir = $inputArquivos.files;
    if (arquivosParaSubir.length <= 0) {
        // Se não houver arquivos, não continuaremos
        return;
    }
    // Preparar os dados do formulário
    const formData = new FormData();
    // Adicionamos cada arquivo a "arquivos[]". Os colchetes são importantes
    for (const arquivo of arquivosParaSubir) {
        formData.append("arquivos[]", arquivo);
    }
    // Nós os enviamos
    $estado.textContent = "Enviando arquivos...";
    const respostaRaw = await fetch("../conf/guardar.php", {
        method: "POST",
        body: formData,
    });
    const resposta = await respostaRaw.json();
    // Você pode tratar a resposta como desejar
    console.log({ resposta });
    // Finalmente limpamos o campo
    $inputArquivos.value = null;
    $estado.textContent = "Arquivos enviados com sucesso";
});