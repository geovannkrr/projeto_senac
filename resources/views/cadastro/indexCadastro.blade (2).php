<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CADASTRAR</title>

        <!-- LINKS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- LINKS -->
    </head>

    <body>
        <div class="container">

            <h4 class="text-center fw-bolder">ESCOLHA UMA OPÇÃO PARA CADASTRAR OS REGISTROS</h4><br><br>
        
            <a href="#">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-success" type="button">CADASTRAR CLIENTE</button>
                </div>
            </a><br>
                    
            <a href="#">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-success" type="button">CADASTRAR PET</button>
                </div>
            </a>            

        </div>

    </body>

    <style>
        .container{
            position: absolute;
            top: 40%;
            left: 12%;
        }

        a{
            text-decoration: none;
        }

        .btn{
            border-radius: 20px;
            padding: 15px;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 18px;
            width: 100%;
        }
    </style>

</html>