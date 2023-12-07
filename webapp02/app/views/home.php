<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    
    <?php
        require_once "public/html_reader.php";
    ?>



</head>
<body class="bg-light">
    <div class="container bg-white w-100">
        
        <header class="w-100 text-white mb-2">
            <h1 class="bg-secondary text-center p-5">
                Web-App 02<br>
                Bienvenid@ a Nuestra Aplicación 
            </h1>
            <nav class="navbar bg-body-tertiary">
                <form class="container-fluid justify-content-start">
                    <a class="m-1 p-1 fs-5 btn btn-primary text-center text-white" href="./index.php?url=user/index"">Ver Usuarios</a></li>
                    <a class="m-1 p-1 fs-5 btn btn-primary text-center text-white" href="./index.php?url=product/index">Ver Productos</a></li>
                    <a class="m-1 p-1 fs-5 btn btn-primary text-center text-white" href="./index.php?url=supplier/index">Ver Suplidores</a></li>
                </form>
            </nav>
        </header>
    
        <main class="bg-white">
            <section>
                <div>
                    <?php 
                        if (isset($data)) // if Data exist
                        {
                            if (isset($data['message'])) {
                                echo '<div class="alert alert-warning">';
                                echo $data['message'];
                                echo '</div>';
                            }
                            require_once $data['view'];
                        }
                        else {
                            $userController = new UserController();
                            $data = $userController->listUsers();
                            require 'user/list.php';
                        }
                    ?>
                </div>
            </section>
            <section class='p-3 mt-5 bg-secondary text-white'>
                <h5>Descripción de la Aplicación</h5>
                <p>Esta es una aplicación web desarrollada en PHP siguiendo el patrón de diseño MVC.</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
        </main>
    
        <footer class="p-3 bg-secondary text-white">
            <p>&copy; 2023 Eliel Feliciano</p>
        </footer>

    </div>
</body>
</html>