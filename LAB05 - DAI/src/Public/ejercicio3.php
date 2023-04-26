<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../css/ejercicios.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="ejer3">
    <nav class="navbar navbar-dark bg-dark">
       <div class="container-fluid flex-container">
            <a href="index.html" class="navbar-brand">LAB05 - Formularios - Diseño de Aplicaciones en Internet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Togle navigation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
              </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="ejercicio1.php" class="nav-link">Ejercicio 1</a></li>
                    <li class="nav-item"><a href="ejercicio2.php" class="nav-link">Ejercicio 2</a></li>
                    <li class="nav-item"><a href="ejercicio3.php" class="nav-link">Ejercicio 3</a></li>
                    <li class="nav-item"><a href="ejercicio4.php" class="nav-link">Ejercicio 4</a></li>
                </ul>
            </div>
       </div> 
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <div class="card border border-secondary">
                    <div class="card-header bg-success">
                        <div class="card-title text-white">Alquiler de automoviles</div>
                    </div>
                    <div class="card-body">
                        <form id="formLogin" action="resultado3.php" method="post">
                            <div class="form-group">
                                <label for="">Tarifa diaria</label>
                                <input name="tarifa" id="tarifa" type="number" class="form-control" placeholder="Ingrese el monto de la taarifa" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Número de días de alquiler</label>
                                <input type="number" class="form-control" id="dias" name="dias" placeholder="Ingrese la cantidad de días de alquiler" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>