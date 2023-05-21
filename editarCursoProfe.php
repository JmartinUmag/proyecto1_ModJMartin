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
                        <li class="nav-item"><a class="nav-link" href="misCursosProfe.php">Cursos</a></li>
                    </ul>

                        <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profesor</a>
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
    <div class="container my-4">
        <h2>Editar Curso</h2>
        <hr>
        <form action="#" method="post">
            <div class="form-group row">
                <div class="col-12 w-auto">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Número</th>
                          <th>Nombre clase</th>
                          <th>Descripción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><input type="text" value="Clase 1"></td>
                          <td><input type="text" value="Descripción de la clase 1."></td>
                          <td><button><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td><input type="text" value="Clase 2"></td>
                          <td><input type="text" value="Descripción de la clase 2."></td>
                          <td><button><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td><input type="text" value="Clase 3"></td>
                          <td><input type="text" value="Descripción de la clase 3."></td>
                          <td><button><i class="bi bi-trash"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <button type="button" class="btn btn-dark">Guardar</button>
                  <button type="button" class="btn btn-primary">Agregar Clase</button>
                  <a href="editarUsuarioCurso.php"><button type="button" class="btn btn-secondary">Ver alumnos</button></a>
                </div>
              </div>
            <div class="offset-md-4 d-flex justify-content-between">
                <div class="text-right">
                </div>
            </div>
        </form>
    </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark mt-5 fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Innovacursos 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>