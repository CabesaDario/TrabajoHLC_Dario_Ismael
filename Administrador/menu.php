<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container_menu">
    <div class= "container_info">
        <img src="https://ambitioustracks.com/wp-content/uploads/2017/01/1.-fundadores.png" alt="user">
        <p>User</p>
        <form method="post" action="index.php">
            <button type="submit" name="login" value="login">Salir</button>
        </form>
    </div>
    <div class= "container_buttons">
        <form method="post" action="">
            <button type="submit" name="curso" value="curso">Curso</button>
        </form>
        <form method="post" action="asignaturas.php">
            <button type="submit" name="asignaturas" value="asignaturas">Asignaturas</button>
        </form>
        <form method="post" action="">
            <button type="submit" name="tareas" value="tareas">Tareas</button>
        </form>
    </div>
 </div>
</body>
</html>