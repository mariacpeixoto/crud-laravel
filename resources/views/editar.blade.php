<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Pessoas</title>
        <style type="text/css">

        body{
            background-image: #f2f2f2;
        }
        h1{
            font-family: Playfair Display;
            color: black;
            font-size: 30px;
            text-align: center;
            padding-top: 50px;
            padding-bottom: 10px;
        }
        p{
            font-family: Playfair Display;
            color: black;
            font-size: 25px;
            font-weight: bold;
            padding-left: 35px;
        }
        label{
            font-family: Playfair Display;
            font-size: 25px;
            color: black;
            font-weight: bold;
        }
        input{
            border-radius: 3px;
            color: black;
            font-size: 20px;
            font-family: Playfair Display;
        }
        button {
            background-color: transparent;
            border-radius: 5px;
            font-family: Playfair Display;
            border-color: black;
            color: black;
            font-size: 25px;
            height: 40px;
            width: 120px;
        }
        </style>
        </head>
        <body>
                <h1>Editar Pessoas</h1>
                <center>
                <p>ID: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
                <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
                    @csrf
                    <label for="lblNome">Nome: </label>
                    <input type="text" name="nome" value="{{$pessoa->nome}}">
                    <br><br>
                    <label for="lblIdade">Idade: </label>
                    <input type="text" name="idade" value="{{$pessoa->idade}}">
                    <br><br><br>
                    <button>Atualizar</button>&nbsp;
                    <a href="/"><button> Voltar</button></a>
                </form>
            </center>
        </body>
</html>
