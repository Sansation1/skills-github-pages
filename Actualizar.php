<?php
require 'Conexion/config.php';
require 'auth.php';

if (!empty($_SESSION['id'])) {
    $user_id = $_SESSION['id']; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $juego_id = isset($_POST['juego_id']) ? $conn->real_escape_string($_POST['juego_id']) : '';
        $tiempo = isset($_POST['tiempo']) ? $conn->real_escape_string($_POST['tiempo']) : '';
        $fecha = isset($_POST['fecha']) ? $conn->real_escape_string($_POST['fecha']) : '';
        $videoUrl = isset($_POST['video']) ? $conn->real_escape_string($_POST['video']) : '';
        if (empty($juego_id) || empty($tiempo) || empty($fecha) || empty($videoUrl)) {
            echo "<script>alert('Todos los campos son requeridos.');</script>";
        } else {
            $checkQuery = $conn->prepare("SELECT * FROM speedruns WHERE user_id = ? AND juego_id = ?");
            $checkQuery->bind_param("ss", $user_id, $juego_id); // Vincular los parámetros correctamente
            $checkQuery->execute();
            $result = $checkQuery->get_result();

            if ($result->num_rows > 0) {
                $updateQuery = $conn->prepare("UPDATE speedruns SET tiempo = ?, fecha = ?, video = ? WHERE user_id = ? AND juego_id = ?");
                $updateQuery->bind_param("sssss", $tiempo, $fecha, $videoUrl, $user_id, $juego_id); // Vincular correctamente los parámetros

                if ($updateQuery->execute()) {
                    header("Location: view_speedrun_register.php");
                    exit();
                } else {
                    echo "Error: " . $updateQuery->error;
                }
                $updateQuery->close();
            } else {
                echo "<script>alert('No tienes un registro en esta categoría para este juego.');</script>";
            }
            $checkQuery->close();
            $conn->close();
        }
    }
} else {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Speedrun actualización de tiempos.">
    <title>Actualizar Speedrun</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Style2.css">
    <link rel="stylesheet" href="CSS/Style3.css">
    <link rel="icon" type="png" href="images/GameHavenLogo.png" class="img2">
</head>
<body>
<nav class="nav1">
    <div class="container">
        <input checked="" class="checkbox" type="checkbox"> 
        <div class="mainbox">
            <div class="iconContainer">
                <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 
                    376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                    </path></svg>
            </div>
            <input class="search_input" placeholder="Searchs games" type="text">
        </div>
    </div>     
    <a href="Index.php">
        <img src="images/Logo.png" class="gamelog" alt="40px">
    </a>
    <label class="hamburger">
    <input type="checkbox">
    <svg viewBox="0 0 32 32">
        <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
        <path class="line" d="M7 16 27 16"></path>
    </svg>
</label>
</nav>
<nav class="nav2">
        <ul class="ul">
            <li class="li"><a href="Speedruns.php" class="a">Speedruns</a></li>
            <li class="li"><a href="Games.html" class="a">Games</a></li>
            <li class="li"><a href="News.html" class="a">News</a></li>
        </ul>
</nav>
<div class="nav nav_close">
      <div class="list">
            <li class="list_item list_item--click">
                    <div class="list_button list_button--click">
                        <img src="images/User.jpeg" class="avatar">
                        <h1 class="nav_link2"> Bienvenido
                        <a href="#" class="nav_link2"><?php echo $row["name"];?></a></h1>
                    </div>
                    <ul class="list_show2">
                <li class="list_inside">
                    <a href="logout.php" class="nav_link nav_link--inside">
                        Log Out</a>
                </li>
            </ul>
            </li>
                <li class="list_item">
                    <div class="list_button">
                    <img src="images/Home.png" class="list_img">
                    <a href="Index.php" class="nav_link2">Inicio</a>
                </div>
            </li>
            <li class="list_item list_item--click">
                <div class="list_button list_button--click">
                    <img src="images/trophy.png" class="list_img2">
                    <a href="#" class="nav_link2">Speedruns</a>
                    <img src="images/arrow.png" class="list_arrow">
                </div>
            
                <ul class="list_show">
                    <li class="list_inside">
                        <a href="Speedruns.php#Características" class="nav_link nav_link--inside">
                        Características</a>
                    </li>
                    <li class="list_inside">
                        <a href="Speedruns.php#Categorías" class="nav_link nav_link--inside">
                        Categorías</a>
                    </li>
                    <li class="list_inside">
                    <a href="Register_Speedruns.php" class="nav_link nav_link--inside">
                        Registro de Speedruns</a>
                    </li>
                    <li class="list_inside">
                        <a href="view_speedrun_register.php" class="nav_link nav_link--inside">
                        Consulta de Speedruns</a>
                    </li>
                </ul>
            </li>  
                <li class="list_item">
                    <div class="list_button list_button--click">
                        <img src="images/Game.png" class="list_img2">
                        <a href="#" class="nav_link2">Games</a>
                        <img src="images/arrow.png" class="list_arrow">
                    </div>
                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="#" class="nav_link nav_link--inside">Generos</a>
                            </li>
                            <li class="list_inside">
                                <a href="#" class="nav_link nav_link--inside">Analisis</a>
                            </li>
                            <li class="list_inside">
                                <a href="#" class="nav_link nav_link--inside">Juegos Destacados</a>
                            </li>
                        </ul>  
                    </li> 
                <li class="list_item">
                    <div class="list_button list_button--click">
                        <img src="images/docs.png" class="list_img1">
                        <a href="#" class="nav_link2">News</a>
                        <img src="images/arrow.png" class="list_arrow">
                    </div>
                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="#" class="nav_link nav_link--inside">Recientes</a>
                            </li>
                            <li class="list_inside">
                                <a href="#" class="nav_link nav_link--inside">Tendencias</a>
                            </li>
                        </ul>
                     </li>
                    
        </div>  
        <div class="pantalla"></div>
      </div>
</div>
<main>     
<form method="POST" >
    <label for="juego">Juego:</label>
    <select id="juego" name="juego_id" required>
    <option value="">-- Selecciona una opción --</option>
        <option value="1">Super Mario 64</option>
        <option value="2">The Legend of Zelda: Ocarina of Time</option>
        <option value="3">Celeste</option>
        <option value="4">Hollow Knight</option>
        <option value="5">Resident Evil 2 Remake</option>
        <option value="6">Minecraft</option>
        <option value="7">Dark Souls</option>
        <option value="8">Portal</option>
    </select>
    <label for="tiempo">Nuevo Record:</label>
    <input type="text" name="tiempo" placeholder="Tiempo del Speedrun (mm:ss:cc) Ejemplo: 00:19:60" required>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" required>

    <label for="video">URL del Video:</label>
    <input type="text" name="video" placeholder="URL del video en YouTube" required>

    <div class="position">
        <button type="reset" class="submit">Resetear</button>
        <button type="submit" name="speeruns" class="submit">Enviar</button>  
    </div>       
</form>
   
</main>
<footer>
        <p>&copy; 2024 Game Haven. Todos los derechos reservados.</p>
    </footer>
<script src="JS/main.js"></script>
<script src="JS/menu.js"></script>
</body>
</html>
