<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Richiesta di diventare revisore</h1> 
    <h2>Ecco i suoi dati:</h2> 
    <h5>Nome: {{$user->name}}</h5> 
    <h5>Email: {{$user->email}}</h5> 
    <a href="{{route('make.revisor',compact('user'))}}">Rendi revisore</a>
</body>
</html>