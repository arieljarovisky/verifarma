<?php require('conexiondb.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="container formulario">
        <form action="formAction/inicioaction.php" method="POST" >
            <h3>Inicie Sesion</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <h3>Ubicacion actual</h3>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">latitud</label>
                <input type="text" name="latitud" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">longitud</label>
                <input type="text" name="longitud" class="form-control" id="exampleInputPassword1" required>
            </div>
      
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
    </div>


</body>

</html>