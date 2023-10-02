<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EXCLUIR PET</title>

        <!-- LINKS -->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- LINKS -->
    </head>

    <body>
        <p>Digite o nome ou ID do Pet que deseja excluir</p>     

        <section class="caixa-search">
            <input class="caixa-texto" type="text" name="" placeholder="Pesquisar...">
            <a class="botao-search" href="#">
                <i class="fas fa-search"></i>
            </a>
        </section>

    </body>
</html>

<style>
        body {
        margin: 0;
        padding: 0;
        background-color: #ccc;
        }

        p{
            color: black;
            font-weight: bolder;
            font-family: sans-serif;
            font-size: 20px;
            position: absolute;
            top: 40%; left: 50%; 
            transform: translate(-50%, -50%); 
        }

        .caixa-search {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #333;
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }

        .caixa-search:hover > .caixa-texto {
            width: 240px;
            padding: 0 6px;
        }

        .caixa-search:hover > .botao-search {
            background-color: #fff;
            margin-left: 3px;
        }

        .botao-search {
            color: red;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            display: flex;
            justify-content: center;
            text-decoration: none;
            align-items: center;
            transition: 0.4s;
        }

        .caixa-texto {
            border: none;
            background-color: #333;
            outline: none;
            float: left;
            padding: 0;
            color: #fff;
            font-size: 16px;
            transition: 0.4s;
            line-height: 40px;
            width: 0px;
            cursor: pointer;
        }
</style>
    
</html>