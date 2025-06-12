<?php
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Style3.css">
    <link rel="stylesheet" href="CSS.css">
</head>
<body>
<nav class="nav1">     
    <a href="Index.php" id="top">
        <img src="images/Logo.png" class="gamelog" alt="40px">
    </a>
    
</nav>
<nav class="nav2">
    <label class="hamburger" for="btn-menu">
            <input type="checkbox">
            <svg viewBox="0 0 32 32">
            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
            <path class="line" d="M7 16 27 16"></path>
        </svg>
    </label>    
    <ul class="ul">
        <li class="li"><a href="Speedruns.php" class="a">Speedruns</a></li>
        <li class="li"><a href="Games.php" class="a">Games</a></li>
        <li class="li"><a href="News.php" class="a">News</a></li>
    </ul>
</nav>
<input type="checkbox" id="btn-menu">
<div class="Menu_lateral">
        <div class="cont-menu">
            <label for="btn-menu" class="icon-close">
                <input type="checkbox" class="a">
                <svg viewBox="0 0 32 32">
                    <path class="line2 line-top-bottom2" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line2" d="M7 16 27 16"></path>
                </svg>
            </label>
            <nav>
                <div class="profile">
                    <!-- Imagen del avatar -->
                    <img id="user-avatar" src="images/avatar.png" alt="Avatar de usuario" class="avatar">
                    <h2 class="username"><?php echo $row["name"];?></h2>
                    
                    <!-- Botón para cambiar la imagen -->
                    <label for="avatar-input" class="change-avatar-btn">Cambiar Imagen</label>
                    <input id="avatar-input" type="file" accept="image/*" style="display: none;">
                </div>
                <div class="container">
                    <input checked="" class="checkbox" type="checkbox"> 
                    <div class="mainbox">
                        <div class="iconContainer">
                            <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" 
                            class="search_icon">
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">    
                            </path></svg>
                        </div>
                        <input class="search_input" placeholder="Searchs games" type="text">
                    </div>
                </div>  
                <ul>
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Perfil.php">Perfil</a></li>
                    <li><a href="#">Configuración</a></li>
                    
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                  </ul>
        </nav>
    </div>
</div>
<div class="foot"></div>
<footer>
    <p>&copy; 2024 Game Haven. Todos los derechos reservados.</p>
</footer>
</div>
</body>
</html>