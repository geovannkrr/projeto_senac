<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIO</title>

        <!-- LINKS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- LINKS -->
    </head>

    <body>
        <div class="container">

            <div class="container text-center">
                <div class="row">

                  <div class="col" id="cadastrar">
                   <a href="#">CADASTRAR REGISTROS</a>
                  </div>

                  <div class="col" id="editar">
                    <a href="#">EDITAR CADASTROS</a>
                  </div>

                  <div class="col" id="visualizar">
                    <a href="#">VISUALIZAR CADASTROS</a>
                  </div>

                  <div class="col" id="excluir">
                    <a href="#">EXCLUIR CADASTROS</a>
                  </div>


                </div>
              </div>
        </div>

    </body>

    <style>

        .container{
            position: absolute;
            top: 50%;
            left: 8%;
        }

        a{
            color: black;
            text-decoration: none;
        }

        .col{
            border: solid black 2px;
            padding: 10px;
            margin-right: 25px;
            border-radius: 15px;
            font-weight: bolder;
            font-size: 22px
        }

        #cadastrar:hover{
            background-color: #03bb85;
            transform: scale(1.1);
        }

        #editar:hover{
            background-color: #6eb8f5;
            transform: scale(1.1);
        }

        #visualizar:hover{
            background-color: #f7f08e;
            transform: scale(1.1);
        }

        #excluir:hover{
            background-color:red;
            transform: scale(1.1);
        }

    </style>

</html>