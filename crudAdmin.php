<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Innovacursos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="50%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="inicioAdmin.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="misCursosAdmin.php">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="crudAdmin.php">CRUD</a></li>
                    </ul>

                        <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="misDatos.php">Mis Datos</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="index.php">Cerrar Sesion</a></li>
                        </ul>
                    </ul>
                        </form>
                    
                </div>
            </div>
        </nav>
        <!-- ENavigation-->
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col bg-dark bg-color m-md-5 my-3 mx-1 rounded">
                        <div class="mt-5">
                            <div class="d-md-flex">
                                <h2 class="flex-shrink-0 text-white mx-4">Sección CRUD</h2>
                                <div class="input-group w-auto">
                                    <select class="form-select bg-dark text-white" id="inputGroupSelect01">
                                    <option value="Profesores">Profesores</option>
                                    <option value="Alumnos">Alumnos</option>
                                    <option value="Categorías">Categorías</option>
                                    </select>
                                </div>
                                <button type="button" class="ms-3 btn btn-outline-light">Aceptar</button>
                            </div>
                        </div>
                        <table class="table text-white mx-4 m-md-5">
                            <thead>
                                <tr>
                                    <th scope="col">Num</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="editarUsuario.php"><button><i class="bi bi-pen"></i></button></a>
                                            <button><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>
                                            <button><i class="bi bi-pen"></i></button>
                                            <button><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>
                                            <button><i class="bi bi-pen"></i></button>
                                            <button><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            
        </body>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Innovacursos 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
