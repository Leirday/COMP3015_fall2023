<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-App 01</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">

    <link href="./styles.css" rel="stylesheet">
</head>
<body class="bg-secondary m-h">
    <div class="container-xl m-h bg-light border border-3 border-dark" style="width:fit-content;">
        <div class="bg-dark text-center text-white p-3 mb-3">
            <h1>
                Web-App 01
                <br>
                Programación Web con Bases de Datos
            </h1>   
        </div>

        <div id="botones" class="text-center mb-5">
            <div class="mb-3">
                <a href="./leer.php" class="m-1 btn btn-primary"> 
                  LEER
                </a>
                <br>
                <a href="./crear.php" class="m-1 btn btn-success"> 
                  CREAR
                </a>
                <br>
                <a href="./actualizar.php" class="m-1 btn btn-warning"> 
                  ACTUALIZAR
                </a>
                <br>
                <a href="./borrar.php" class="m-1 btn btn-danger"> 
                  BORRAR
                </a>
              </div>
      </div>

    
    </div>
    <footer class="footer mt-auto py-3 bg-dark sticky-footer text-white text-center">
        <div class="container">
          <span class="">
            <p>&copy; 2023 Eliel Feliciano</p>
          </span>
        </div>
    </footer>


</body>
</html>