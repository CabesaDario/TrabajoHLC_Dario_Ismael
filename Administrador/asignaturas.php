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
    <div class="container_menu">
        <div class= "container_info">
            <img src="https://ambitioustracks.com/wp-content/uploads/2017/01/1.-fundadores.png" alt="user">
            <p>User</p>
            <form method="post" action="menu.php">
                <button type="submit" name="menu" value="menu">Volver</button>
            </form>
        </div>
        <div class= "container_listadd">
            <h1>Asignaturas de HLC</h1>
            <div class="empty"></div>
            <div class="list">
                <?php
                
                    $list = array("Literatura","Matematicas","Ciencias","Literatura","Matematicas","Ciencias","Literatura","Matematicas","Ciencias","Literatura","Matematicas","Ciencias","Literatura","Matematicas","Ciencias","Literatura","Matematicas","Ciencias");
                    foreach($list as $value){
                        print("<p>$value</p>");
                    }

                ?>
            </div>
            <form method="post" action="">
                <label>Añadir asignatura al curso:</label>
                <button type="submit" name="add_asignatura" value="add_asignatura">+</button>
            </form>
        </div>
    </div>
</body>
</html>