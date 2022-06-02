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
<label for="user" class="form-label">User</label>
<input type=user" class="form-control" id="user" aria-describedby="user" maxlength="15" placeholder="ej: Mario" >
<label for="password" class="form-label">Contraseña</label>
<input type="password" class="form-control" id="password">
</form>
</section>

    <?php
    //valido los datos Ingresados (funsión validar)
    //valido las credenciales
    
    if($user =="admin" &&
    $pass =="admin")
    {
    session_start();
    $_SESSION ['usuario']==$user;
    header("Location:index.php");
}else{
    echo "Usuario y/o password incorrectos";
}
    ?>
</body>
</html>