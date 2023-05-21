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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="inicioAdmin.php">Inicio</a></li>
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
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
        </nav>
        <!-- ENavigation-->
        <div class="container my-4">
            <h2>Nombre apellido</h2>
            <hr>
            <div class="form-group row">
                <div class="col-12 w-auto">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Cursos</th>
                          <th>Profesor</th>
                          <th>Notas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Lorem Ipsum</td>
                          <td>John Doe</td>
                          <td>
                            <div class="d-flex justify-content-between">
                              <span class="bg-primary text-white p-1 rounded mx-1">6</span>
                              <span class="bg-secondary text-white p-1 rounded mx-1">5</span>
                              <span class="bg-success text-white p-1 rounded mx-1">7</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Dolor Sit</td>
                          <td>Jane Smith</td>
                          <td>
                            <div class="d-flex justify-content-between">
                              <span class="bg-danger text-white p-1 rounded mx-1">2</span>
                              <span class="bg-warning text-white p-1 rounded mx-1">4</span>
                              <span class="bg-info text-white p-1 rounded mx-1">3</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Amet Consectetur</td>
                          <td>Mike Johnson</td>
                          <td>
                            <div class="d-flex justify-content-between">
                              <span class="bg-danger text-white p-1 rounded mx-1">1</span>
                              <span class="bg-warning text-white p-1 rounded mx-1">7</span>
                              <span class="bg-success text-white p-1 rounded mx-1">5</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="crudAdmin.php"><button class="btn btn-secondary">Volver</button></a>
                  </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark mt-5 fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright © 
              Innovacursos 2023</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>