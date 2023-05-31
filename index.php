<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="d-flex rounded justify-content-around align-items-center " style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; max-width: 1200px; margin: 120px auto;">

    <div class="img-container">
    <img src="https://i.ibb.co/LzZnmJz/img.png" alt="img" border="0">
    </div>

    <div class="" >
        <form action="recupera-dados.php" method="post">
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Nome</label>
                <input type="text" name="nome" class="form-control"  placeholder="Digite seu Nome" required>
            </div>
            <br>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Digita seu Email" required>
            </div>
            <br>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Idade</label>
                <input required type="number" name="idade" class="form-control"  placeholder="Digite sua idade">
            </div>
            <br>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Hobbie</label>
                <input required type="text" name="hobbie" class="form-control"  placeholder="Digite Hobbie">
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

</div>
    
</body>
</html>