<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Uploads Múltiplos | Dorivaldo Ngoma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dorivaldo Ngoma">
    <meta name="description" content="Formulário para upload de arquivos múltiplo usando JavaScript, AJAX, FormData e PHP">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Enviar arquivos</h1>
                <div class="form-group">
                    <input multiple type="file" class="form-control" id="inputArquivos">
                    <br><br>
                    <button id="btnEnviar" class="btn btn-success">Enviar</button>
                </div>
                <div class="alert alert-info" id="estado"></div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>