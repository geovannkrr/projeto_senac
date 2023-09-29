<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>VISUALIZAR PET</title>

         <!-- LINKS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
         <!-- LINKS -->
    </head>

    <body>

        <hr>
        <h1 class="text-center">Cadastros do Pet</h1>
        <br>

        <div class="container">
            <table class="table table-light text-center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Castrado?</th>
                    <th scope="col">Vacinações</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Observações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row" class="col-2 ">
                        <div class="flex-column">
                            
                            <a class="btn btn-success"
                            href="#">
                                <i class="bi bi-eye"></i>
                            </a>
                            
                            <a class="btn btn-dark"
                             href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                    </tr>
                </tbody>
              </table>
            
        </div>

        
    </body>

</html>