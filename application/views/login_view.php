<!DOCTYPE html>
<html>
 
<head>    
    <title> Welcome hola </title>
</head>
<body>
    <div>
        <label>puta</label>
           <h2>login</h2>
        <form action='<?php echo base_url();?>login/process' method='post' name='process'>
            <h2>login</h2>
            <br />            
            <label for='username'>Username</label>
            <input type='text' name='username' id='username' size='25' /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='25' /><br />                            
        
            <input type='Submit' value='Login' />            
        </form>
    </div>
</body>
</html>