<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CADASTRAR PET</title>

         <!-- LINKS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
         <!-- LINKS -->
    </head>

    <body>
        
        <div class="container">
            
            <h1>Digite as Informações do Pet</h1><br>

            <form class="form" action="#" method="post">
                
                <div class="form_cadastro">
                    <label for="nome" class="form_label">Nome do Pet</label>
                    <input type="text" name="nome" class="form_input" id="nome" placeholder="Digite o nome do Pet" required>
                </div> <br>

                <div class="form_cadastro">
                    <label for="tipo_pet" class="text">Tipo do Pet</label>
                    <select name="tipo_pet" class="dropdown" required>
                        <option selected disabled class="form_select_option" value="">Selecione o Tipo do Pet</option>
                        <option value="Cachorro" class="form_select_option">Cachorro</option>
                        <option value="Gato" class="form_select_option">Gato </option>
                        <option value="Aves" class="form_select_option">Aves</option>                    
                        <option value="Repteis" class="form_select_option">Repteis</option>                    
                    </select>
                </div><br>

                <div class="form_cadastro">
                    <label for="sexo_pet" class="text">Sexo do Pet</label>
                    <select name="sexo" class="dropdown" required>
                        <option selected disabled class="form_select_option" value="">Selecione o Sexo do Pet</option>
                        <option value="Macho" class="form_select_option">Macho</option>
                        <option value="Femea" class="form_select_option">Femea </option>
                    </select>
                </div><br>

                <div class="form_cadastro">
                    <label for="cor_pet" class="text">Cor do Pet</label>
                    <select name="cor_pet" class="dropdown" required>
                        <option selected disabled class="form_select_option" value="">Selecione a Cor do Pet</option>
                        <option value="Amarelo" class="form_select_option">Amarelo</option>                    
                        <option value="Bege" class="form_select_option">Bege</option>                    
                        <option value="Branco" class="form_select_option">Branco</option>                    
                        <option value="Branco e Preto" class="form_select_option">Branco e Preto</option>                    
                        <option value="Caramelo" class="form_select_option">Caramelo</option>                    
                        <option value="Caramelo Claro" class="form_select_option">Caramelo Claro</option>                    
                        <option value="Creme" class="form_select_option">Creme</option>                    
                        <option value="Grafite" class="form_select_option">Grafite</option>                    
                        <option value="Marrom" class="form_select_option">Marrom</option>                    
                        <option value="Mesclado" class="form_select_option">Mesclado</option>                    
                        <option value="Preto" class="form_select_option">Preto</option>                    
                    </select>
                </div><br>

                <div class="form_cadastro">
                    <label for="sexo_pet" class="text">O Pet é Castrado?</label>
                    <select name="sexo" class="dropdown" required>
                        <option selected disabled class="form_select_option" value="">Selecione</option>
                        <option value="sim" class="form_select_option">Sim</option>
                        <option value="nao" class="form_select_option">Não </option>
                    </select>
                </div><br>
                
                <div class="form_cadastro">
                    <label for="data_nascimento" class="form_label">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form_input" id="data_nascimento" placeholder="Data de Nascimento" required>
                </div> <br>

                <div class="form_cadastro">
                    <label for="situacao" class="text">Situação</label>
                    <select name="sexo" class="dropdown" required>
                        <option selected disabled class="form_select_option" value="">Qual a Situação do Pet?</option>
                        <option value="Apto" class="form_select_option">Apto para Adoção</option>
                        <option value="Inapto" class="form_select_option">Inapto para Adoção </option>
                    </select>
                </div><br>

                <div class="form_cadastro">
                    <label for="data_nascimento" class="form_label">Observações</label>
                    <textarea name="descricao" id="" cols="50" rows="5"></textarea>
                </div><br>

                    <div class="submit">
                      <input type="hidden" name="acao" value="enviar">
                      <button type="submit" name="Submit" class="btn" >Enviar Cadastro</button>
                    </div><br>
            </form>
        </div>
    </body>

    <style>
        .container{
            width: 750px;
            background:#ffffff; 
            border-radius:15px; 
            position: absolute;
            top: 2%;
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
        input{
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

        .dropdown{
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
        
        textarea{
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
           margin-left: 5px;
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
            background-color: green;
            color: white;
            border: solid black 2px;
            border-radius: 10px;
            font-weight: bolder;
        }

    </style>

</html>