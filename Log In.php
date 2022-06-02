<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>




<section class="d-flex justify-content-center align-items-center">
    <form>
    <br>
  <div class="card col-sm-10 p-3">
  <div class="mb-2">
      <h4>Formulario</h4>
      <i>Por favor, igrese sus datos...</i>
  </div>
  
  <label for="user" class="form-label">Usuario</label>
  <input type="nombre" class="form-control" id="exampleInputnombre" aria-describedby="user" maxlength="15" placeholder="ej: Mario" >
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password">
    <div id="password" class="form-text">Recuede: debe ser unica.</div>
</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</section>




    <?php
    //valido los datos Ingresados (funsión validar)
    //valido las credenciales
    
    if($user =="admin" &&
    $pass =="admin")
    {
    session.start();
    $_SESSION ['usuario']==$user;
    header("Location:index.php");
}else{
    echo "Usuario y/o password incorrectos";
}
    ?>
</body>
</html>