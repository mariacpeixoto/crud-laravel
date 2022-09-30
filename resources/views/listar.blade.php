<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Pessoas</title>
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

        table,td,th {
            font-family: Playfair Display;
            color: black;
            border: 1px solid black;
            padding: 15px;
            border-collapse: collapse;
            font-size: 25px
        }
        button {
            background-color: transparent;
            border-radius: 5px;
            font-family: Playfair Display;
            border-color: black;
            color: black;
            font-size: 25px;
            height: 40px;
            width: 100px;
        }
        th~button{
            border-color: transparent;
        }
        </style>
    </head>
    <body>
            <h1>Consulta de Pessoas</h1>
            <center>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $p)
                    <tr>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->idade}}</td>
                        <td scope="col">
                            <a href="/editar/{{$p->id}}"><button type="button">Editar</button></a>
                            <a href="/excluir/{{$p->id}}"><button type="button">Excluir</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <a href="/"><button>Voltar</button></a>
        </center>
    </body>
</html>
