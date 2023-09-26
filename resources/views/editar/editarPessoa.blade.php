<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CADASTRAR PESSOA</title>

         <!-- LINKS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
         <!-- LINKS -->
    </head>

    <body>
        
        <div class="container">
            
            <h1>Edite as Informações do Cliente</h1><br>

            <form class="form" action="#" method="post">
                
                <div class="form_cadastro">
                    <label for="nome" class="form_label">Nome</label>
                    <input type="text" name="nome" class="form_input" id="nome" placeholder="Digite seu nome" required>
                </div> <br>
                
                <div class="form_cadastro">
                    <label for="e-mail" class="form_label">Email</label>
                    <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
                </div> <br>

                <div class="form_cadastro">
                    <label for="cpf" class="form_label">CPF</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF" required>
                </div><br>
                
                <div class="form_cadastro">
                    <label for="data_nascimento" class="form_label">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form_input" id="data_nascimento" placeholder="Data de Nascimento" required>
                </div> <br>
                
                <div class="form_cadastro">
                    <label for="telefone" class="form_label">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
                </div><br>

                <div class="form_cadastro">
                    <label for="cep" class="form_label">CEP</label>
                    <input type="number" name="cep" id="cep" placeholder="Digite o CEP" required>
                </div><br>

                    <div class="submit">
                      <input type="hidden" name="acao" value="enviar">
                      <button type="submit" name="Submit" class="btn" >Atualizar Registros</button>
                    </div><br>
            </form>
        </div>
    </body>

    <style>
        .container{
            width: 700px;
            background:#ffffff; 
            box-shadow: 1px 0px 1.2px 0px #e3e3e3; 
            border: solid black 2px;
            border-radius:15px; 
            padding:1em;
            position: absolute;
            top: 6%;
            left: 30%;
        }
        .container h1 {
            font-size: 2.3em;
            text-align: center;
            font-weight: bolder;
            color: black;
            border-bottom: 1px #f0eded solid;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
        .form_cadastro {
            width: 90%;
            margin: 0 auto;
            margin-bottom: 30px;
            position: relative;
        }
              
        .form_cadastro {
            width: 100%;
            margin-bottom: 20px;
            position: relative;
        }
        input {
            font-size: 16px;
            font-family: inherit;
            padding: 8px 15px;
            border-radius: 4px;
            border: 1px #f2f2f2 solid;
            background: #fdfdfd;
            outline: none;
            width: 100%;
            border: solid black 1px;
            border-radius: 5px;
        }

        label{
           font-weight: bolder;
           margin-bottom: 5px;
        }

        .btn{
            position: absolute;
            left: 32%;
            bottom: 2%;
            width: 30%;
            border: solid black 2px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bolder;
        }

        .btn:hover{
            background-color: blue;
            color: white;
            border: solid black 2px;
            border-radius: 10px;
            font-weight: bolder;
        }

    </style>

</html>