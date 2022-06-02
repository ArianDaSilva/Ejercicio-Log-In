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