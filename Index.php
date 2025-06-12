<?php
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introducción a los Videojuegos: Historia, géneros, plataformas y el futuro de los videojuegos.">
    <title>Game Haven Inicio</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/Style2.css">
    <link rel="stylesheet" href="CSS/style3.css">
    <link rel="stylesheet" href="CSS.css">
    <link rel="website icon" type="png" href="images/GameHavenLogo.png">
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
<form id="descripcion" class="p">
        <h1 class="borde">¡Bienvenidos a Game Haven</h1>
        <div class="horizontal-lines"></div><br>
    </form>
  <!-- Sección News -->
  <section id="news">
    <h2>News</h2>
    <p>Mantente al día con las últimas noticias del mundo de los videojuegos: lanzamientos, actualizaciones y más.</p>
    <ul>
      <li><a href="news/new-releases.html">Nuevos lanzamientos de juegos</a></li>
      <li><a href="news/updates.html">Actualizaciones importantes</a></li>
      <li><a href="news/events.html">Eventos de la comunidad</a></li>
      <li><a href="news/rumors.html">Rumores sobre próximos títulos</a></li>
    </ul>
  </section>
  <section id="exclusivas-industria">
    <h2>Reflexión sobre las exclusividades en la industria de los videojuegos</h2>
    <p>En una reciente entrevista, Yoshinori Kitase, productor de <em>Final Fantasy VII Rebirth</em>, destacó un tema clave en la industria de los videojuegos: las exclusividades. Kitase comentó que la tendencia de lanzar juegos exclusivos para ciertas plataformas podría ser un concepto del pasado. Según su opinión, los desarrolladores deben enfocarse en llegar al mayor número de jugadores posible, lo que implica lanzar los títulos en tantas plataformas como sea posible. Aunque los títulos más recientes de <em>Final Fantasy</em>, como <em>Final Fantasy VII Remake</em> y <em>Rebirth</em>, son exclusivos temporales para PS5, Square Enix ha anunciado que estos juegos eventualmente estarán disponibles en PC, lo que refuerza la idea de que la exclusividad puede ser más un obstáculo que una ventaja para los desarrolladores a largo plazo. Esta reflexión plantea importantes preguntas sobre el futuro de las plataformas y la evolución de los modelos de negocio en la industria del videojuego.</p>
</section>

<section id="desafios-industria-2025">
    <h2>La industria del videojuego se enfrenta a desafíos en 2025: ¿Qué nos espera?</h2>
    <p>La industria de los videojuegos, que continúa siendo una de las más rentables y en constante crecimiento, enfrenta desafíos clave para los próximos años. Se estima que, para finales de 2024, las ganancias superarán los 280.000 millones de dólares. Sin embargo, en medio de este auge económico, las cifras de despidos en el sector han alcanzado los 14.000 en el último año, lo que refleja la presión que enfrentan los desarrolladores, especialmente en términos de presupuestos elevados y expectativas de calidad. En 2025, uno de los lanzamientos más esperados es el de <em>GTA VI</em>, un título que podría determinar el rumbo de la industria. Un fracaso en este proyecto podría tener repercusiones profundas en muchas empresas que dependen de la rentabilidad de grandes franquicias. Este escenario pone de manifiesto la fragilidad de la industria frente a los desafíos económicos, los riesgos de grandes inversiones y las tensiones con el uso creciente de la inteligencia artificial en el desarrollo de videojuegos. Con el futuro de los videojuegos en juego, es crucial observar cómo los desarrolladores se adaptan a estos desafíos en los próximos años.</p>
</section>

<section id="juegos-indie-2025">
    <h2>Los juegos indie más esperados para 2025</h2>
    <p>Los videojuegos indie siempre han sido una parte fundamental de la innovación dentro de la industria, y en 2025, los jugadores tienen muchos títulos interesantes en el horizonte. Juegos como <em>Hyper Light Breaker</em>, un RPG de acción en mundo abierto que promete seguir la exitosa fórmula de <em>Hyper Light Drifter</em>, y <em>Mandragora</em>, un juego de rol de acción que invita a los jugadores a explorar un mundo oscuro y lleno de misterios, están en la lista de los más anticipados. Además, títulos como <em>MOUSE: P.I For Hire</em> y <em>Nivalis</em> ofrecen una variedad de experiencias, desde detectives resolviendo misterios en un mundo pixelado hasta la simulación de una ciudad futurista. Otros juegos como <em>Ratatan</em>, <em>Skate Story</em> y <em>Slay the Spire 2</em> están causando gran expectación gracias a sus mecánicas de juego innovadoras y sus promesas de llevar la experiencia de juego a nuevas alturas. Estos juegos indie destacan por su creatividad, sus historias únicas y sus enfoques frescos, lo que los convierte en una opción atractiva para cualquier amante de los videojuegos en 2025.</p>
</section>

<section id="team17-legado">
    <h2>El legado de Team17 y la pérdida de un pionero de la industria</h2>
    <p>Recientemente, la industria de los videojuegos perdió a una de sus figuras más importantes, el cofundador de Team17, el estudio británico responsable de títulos icónicos como <em>Worms</em> y <em>Alien Breed</em>. Esta triste noticia ha conmovido a la comunidad gamer, ya que Team17 fue uno de los estudios que, en sus inicios, definió muchos de los elementos que ahora consideramos básicos en los videojuegos. Su legado no solo se limita a sus juegos, sino también a su enfoque innovador y su capacidad para adaptar sus títulos a diferentes plataformas. La pérdida de uno de los pioneros de la industria marca el fin de una era, pero su impacto seguirá siendo recordado por todos los que disfrutaron de los juegos que marcaron una generación.</p>
</section>

<section id="amenazas-eventos-nintendo">
    <h2>Desafíos legales: amenazas de muerte y cancelación de eventos de Nintendo</h2>
    <p>Un reciente escándalo ha sacudido la comunidad gamer: un hombre fue arrestado después de enviar amenazas de muerte que llevaron a la cancelación de eventos importantes de Nintendo, incluido el Nintendo Live 2024. Este suceso pone de relieve los peligros y la tensión que a veces se generan en torno a los eventos más importantes del mundo de los videojuegos. Las amenazas contra los organizadores y participantes en estos eventos son un recordatorio de los riesgos que enfrentan las empresas y las comunidades en línea, así como de la importancia de mantener un entorno seguro y respetuoso. Este incidente también subraya la necesidad de tomar medidas de seguridad más estrictas en eventos masivos de videojuegos, para garantizar la integridad física y emocional de los involucrados.</p>
</section>

<section id="batman-monolith">
    <h2>Filtraciones de la industria: el juego de Batman cancelado por Monolith Productions</h2>
    <p>Una filtración reciente ha revelado detalles sobre un juego de Batman que fue cancelado antes de su lanzamiento. Monolith Productions, el estudio detrás de <em>La Tierra Media: Sombras de Mordor</em>, estaba trabajando en un juego en el universo de Batman, que iba a ser una aventura de acción en un mundo abierto. Sin embargo, el proyecto fue cancelado a favor del desarrollo de <em>La Tierra Media: Sombras de Mordor</em>, que finalmente se convertiría en uno de los títulos más populares de la década. La filtración ha dejado a los fanáticos preguntándose qué podría haber sido este proyecto, y cómo habría encajado en el mundo de Gotham. Esta historia es solo un ejemplo de cómo, en la industria de los videojuegos, muchos proyectos interesantes pueden ser abandonados por diversas razones, dejando solo la especulación de lo que podría haber sido.</p>
</section>

<section id="fortnite-cyberpunk">
    <h2>Fortnite y Cyberpunk 2077: una nueva colaboración en el horizonte</h2>
    <p>Una de las noticias más emocionantes para los fanáticos de <em>Fortnite</em> y <em>Cyberpunk 2077</em> es la confirmación de una colaboración entre ambos mundos. <em>Fortnite</em>, el popular juego de batalla real, se unirá al universo de <em>Cyberpunk 2077</em>, trayendo consigo nuevos personajes, atuendos y contenido relacionado con este aclamado RPG distópico. Este cruce de universos no solo ofrece a los jugadores de <em>Fortnite</em> nuevos elementos para personalizar sus avatares, sino que también introduce una nueva dimensión de narrativa y estética inspirada en el futurismo y la tecnología avanzada de <em>Cyberpunk 2077</em>. La colaboración promete ser un evento emocionante para los jugadores de ambos títulos, y se espera que atraiga a muchos fanáticos de ambos universos.</p>
</section>

<section id="sony-consola-portatil">
    <h2>Sony y su próxima consola portátil: el futuro de los videojuegos portátiles</h2>
    <p>Sony está trabajando en el desarrollo de una nueva consola portátil que podría cambiar la forma en que jugamos en cualquier lugar. Esta nueva consola portátil se basará en la plataforma PlayStation Portal, lo que permitirá a los usuarios acceder a juegos de PS5 en cualquier lugar con una conexión a Internet estable. Aunque los detalles aún son escasos, este dispositivo promete ser una revolución en el mercado de las consolas portátiles, combinando la potencia de la PS5 con la comodidad y versatilidad de un dispositivo portátil. Si Sony logra replicar el éxito de sus consolas portátiles anteriores, como la PlayStation Vita, esta nueva consola podría convertirse en una de las grandes novedades de la industria para los próximos años.</p>
</section>
<script src="JS/main.js"></script>
<script src="JS/menu.js"></script>
</main>
<footer>
    <p>&copy; 2024 Game Haven. Todos los derechos reservados.</p>
</footer>
</div>
</body>
</html>
