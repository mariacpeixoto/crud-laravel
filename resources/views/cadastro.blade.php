<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Pessoa</title>
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
            font-size: 25px
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
            <h1>Cadastro de Pessoas</h1>
            <center>
            <form action="/inserir-pessoas" method="post">
                @csrf
                <p>{{ session() -> get('req')}}</p>
                <label for="txtNome">Nome:  </label>
                <input type="text" name="nome" id="txtnome">
                <br><br>
                <label for="txtidade">Idade: </label>
                <input type="text" name="idade" id="txtIdade">
                <br><br><br>
                <button type="submit">Cadastrar</button> &nbsp;
                <a href="/"><button type="button">Voltar</button></a>
            </form>
            <br>
        </center>
    </body>
</html>
