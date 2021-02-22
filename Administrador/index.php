<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container_login">
    <h1>Administración</h1>
        
    <form class="form_login" method="post" action="menu.php" name="signin-form">
        <div class="form-element">
            <label>Usuario:</label>
            <input type="text" name="username" required />
        </div>
        <div class="form-element">
            <label>Contraseña:</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Iniciar sesión</button>
    </form>
</div>

    

</body>
</html>