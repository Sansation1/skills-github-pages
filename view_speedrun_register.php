<?php
require 'Conexion/config.php'; // Incluir la conexión
require 'auth.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Style2.css">
    <link rel="stylesheet" href="CSS/Style3.css">
    <link rel="icon" type="png" href="images/GameHavenLogo.png" class="img2">
</head>
<style>
main {
  max-width: 900px;
  margin: 2rem auto;
  padding: 1rem;
  background: #151515;
  border-radius: 5px;
  box-shadow: 0 0px 10px #151515;
}

h1,
h2,
h3 {
  font-size:3em;
  margin-bottom: 1rem;
  text-align: center;
}

h2{
    position: relative;
    display:flex;
    text-align:center;
    top:10px;
    left:25%;
}
/* Estilo para las tablas dentro del main */
table {
  width: 100%;
  border-collapse: collapse;
  border:1px solid ##04d481;
  margin-top: 2rem;
}
table img{
    height:200px;
    width: 210px;
}
th, td {

  padding: 1rem;
  text-align: center;
  border: 1px solid ##04d481;
}


td a {
    font-size:1em;
    color: #04d481;
}

td a:hover {
  text-decoration: underline;
}

/* Estilo para las filas */
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

/* Formulario de botones dentro de la tabla */
form button {
  background-color: #024f3c;
  color: #fff;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

form button:hover {
  background-color: #013629;
}
</style>
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
                <li class="li"><a href="Games.php" class="a">Games</a></li>
                <li class="li"><a href="News.php" class="a">News</a></li>
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
<?php
$queryCategorias = "SELECT DISTINCT categoria FROM speedruns";
$stmtCategorias = mysqli_prepare($conn, $queryCategorias);
mysqli_stmt_execute($stmtCategorias);  // Usar mysqli_stmt_execute
$resultCategorias = mysqli_stmt_get_result($stmtCategorias);

echo "<main>"; // Empezamos el contenedor principal (main)

if (mysqli_num_rows($resultCategorias) > 0) {
    while ($categoria = mysqli_fetch_assoc($resultCategorias)) {
        $categoriaNombre = htmlspecialchars($categoria['categoria']);
        echo "<h2>Categoría: $categoriaNombre</h2>";

        // Obtener los speedruns por categoría con consulta preparada
        $query = "SELECT speedruns.id, tb_user.name, juegos.nombre AS juego, speedruns.tiempo, speedruns.fecha, speedruns.video, juegos.imagen 
          FROM speedruns 
          INNER JOIN tb_user ON speedruns.user_id = tb_user.id
          INNER JOIN juegos ON speedruns.juego_id = juegos.Id  
          WHERE speedruns.categoria = ?";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 's', $categoriaNombre); // Usar parámetros para evitar inyecciones SQL
        mysqli_stmt_execute($stmt);  // Ejecutar la consulta
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Imagen</th>
                        <th>Juego</th>
                        <th>Jugador</th>
                        <th>Tiempo</th>
                        <th>Fecha</th>
                        <th>Video</th>
                        <th>Acciones</th>
                    </tr>";
            
            // Mostrar los resultados en una tabla
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td><img src='" . htmlspecialchars($row['imagen']) . "' alt='Imagen de " . htmlspecialchars($row['juego']) . "' width='50' height='50'></td>
                        <td>" . htmlspecialchars($row['juego']) . "</td>
                        <td>" . htmlspecialchars($row['name']) . "</td>
                        <td>" . htmlspecialchars($row['tiempo']) . "</td>
                        <td>" . htmlspecialchars($row['fecha']) . "</td>
                        <td><a href='" . htmlspecialchars($row['video']) . "' target='_blank'>Ver Video</a></td>
                        <td>
                            <form method='POST' action='actualizar.php' style='display:inline-block;'>
                                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                                <button type='submit'>Actualizar</button>
                            </form>
                            <form method='POST' action='eliminar.php' style='display:inline-block;'>
                                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                                <button type='submit'>Eliminar</button>
                            </form>
                        </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No hay speedruns registrados en esta categoría.";
        }
    }
} else {
    echo "No hay categorías disponibles.";
}

echo "</main>"; // Cerramos el contenedor principal (main)

// Cerrar la conexión
mysqli_close($conn);
?>
<footer>
        <p>&copy; 2024 Game Haven. Todos los derechos reservados.</p>
    </footer>
<script src="JS/main.js"></script>
<script src="JS/menu.js"></script>
</body>
</html>