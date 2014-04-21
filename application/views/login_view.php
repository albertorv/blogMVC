<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">

    <title>Login</title>
</head>
<body>
    <div id="imagen">
        <img id="imglog" src="css/login.jpg" alt="">
    </div>
    
    <div >
        <form  method="post" action="<?php echo base_url().'/index.php/blog/update_comment'; ?>" name="process">  <!--esta linea no deja mostrar el form-->
            <h2>LOGIN</h2>
            <br>
            <label for="username">Usuario: </label>
            <input type="text" name="username" id="username" size="25"/><br>
            <label for="password">Contraseña: </label>
            <input type="password" name="password" id="password" size="25"/><br>

            <input type="Submit" value="Login"/>
        </form>
    </div>
</body>
</html>



