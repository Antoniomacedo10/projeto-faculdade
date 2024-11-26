<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá {{$telefones[0]->cliente}}, seu numero é {{$telefones[0]->telefone}}</h1>
    <h1>Olá {{$telefones[1]->cliente}}, seu numero é {{$telefones[1]->telefone}}</h1>


    @foreach ($telefones AS $telefone)
        <h1> O numero do cliente {{$telefone->cliente}} é {{$telefone->telefone}}</h1>

    @endforeach



</body>
</html>