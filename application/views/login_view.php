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
            <?php= form_open(base_url().'Login/process/')?>
            <p>Usuario: <?php=form_input('user')?></p>
            <input type="text" name="username" id="username" size="25"/><br>
            <p>Contraseña: <?php=form_input('password')?></p>
            <input type="password" name="password" id="password" size="25"/><br>
           <input type="Submit" value="Login"/>
            <?php= form_submit('Submit', 'Login')?><br>
    </div>
</body>
</html>



