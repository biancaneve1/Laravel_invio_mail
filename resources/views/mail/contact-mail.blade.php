
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie {{$content['name']}} per averci conattato</h1>
    <h3>Il riepilogo dei tuoi dati:</h3>
    <ul>
        <div class="li">Nome e Cognome: {{$content['name']}}</div>
        <div class="li">email: {{$content['email']}}</div>
        <div class="li">info: {{$content['info']}}</div>
        <div class="li">Messaggio: {{$content['message']}}</div>
    </ul>
    <h2>Risponderemo il prima possibile</h2>
    <small>Ci scusiamo per l'attesa</small>
</body>
</html>