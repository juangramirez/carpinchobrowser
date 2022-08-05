<?php
$busqueda = $_GET["busqueda"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/carpinchoweb.png">
    <title>Carpincho Browser</title>
</head>
<body>
    <header>
    </header>
    <main class="container">
        <section class="container main-info">
            <img src="img/carpincho.jpg" id="img-principal" alt="" width="100px">
            <h1>Carpincho Browser</h1>
        </section>
        <form action="index.php" method="GET">
            <input type="text" id="busqueda" name="busqueda" placeholder="¿Qué quieres buscar?" autocomplete="off">
            <input type="submit"><a href="https://duckduckgo.com/?q=<?=$busqueda?>">Buscar</a></input>
        </form>
        <hr>
        <p>
            Presiona la tecla Enter para guardar tu búsqueda y luego clickea en Buscar
        </p>
    </main>
    <footer>
        Juan Ramírez - me@juangabrielramirez - <a href="https://github.com/juangramirez"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg> @juangramirez </a>
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#273036" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,133.3C213.3,117,267,107,320,128C373.3,149,427,203,480,192C533.3,181,587,107,640,106.7C693.3,107,747,181,800,197.3C853.3,213,907,171,960,170.7C1013.3,171,1067,213,1120,197.3C1173.3,181,1227,107,1280,85.3C1333.3,64,1387,96,1413,112L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
    </footer>
</body>
</html>