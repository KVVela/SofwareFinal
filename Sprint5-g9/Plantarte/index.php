<?PHP
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" href="img/plantarte.png" />  
    <title>SIA - inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/modales.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/formn.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg color-1">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PLANTARTE</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <!-- para que el mb(margin bottom) sea 2 y cuando
            se visualice en un lg (portátil o dispositivo de mayor amplitud de pixeles el mb sea de 0). -->
            
            <li class="nav-item p-2">
              <a class="nav-link border-down" href="#quienes">¿QUIENES SOMOS?</a>
            </li>
             <li class="nav-item p-2">
              <a class="nav-link border-down" href="#planta">PLANTA UN ÁRBOL</a>
            </li>
             <li class="nav-item p-2 color-1">
              <a class="nav-link border-down" href="#">¿ERES UNA EMPRESA?</a>
            </li>
             <li class="nav-item p-2">
              <a class="nav-link border-down" href="#">HAZTE VOLUNTARIO</a>
            </li>
            <li class="nav-item p-2">
                <a class="nav-link" onclick="inicio()"><span class="login-item">INICIAR SESIÓN</span></a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link border-down" href="#">CONTACTO</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    
    <div id="conten_view" style="width: 100%; height: auto">
        
    </div>

      <div class="container-fluid footer-nazi">
        <footer class="py-5">
          <H1>PLANTARTE</H1>
          <div class="row">
            <div class="col-2">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">QUIENES SOMOS</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FNUESTRO TRABAJO</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">HAZTE VOLUNTARIO</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">PLANTA UN ÁRBOL</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">PLANTA UN ÁRBOL</a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-3">
              <h4>CONTACTO</h4>
              <div class="container">
                <form action="">
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="Nombre">
                  </div>

                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="Apellido">
                  </div>
                </div>

                <div class="row">
                  <div class="col-4">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>

                  <div class="col-4">
                    <input type="tel" class="form-control" placeholder="Teléfono">
                  </div>

                </div>
                
                <div class="row">
                  <div class="col-8">
                    <select class="form-select">
                      <option value="1">Individuo</option>
                      <option value="2">Empresa</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-8">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              </div>
            </div>


          </div>
      
          <div class="py-2 my-2 border-top">
            <p>&copy; 2021 Plantarte. All rights reserved.</p>
          </div>
        </footer>
      </div>

    <!-- Se trae los dos enlaces de JS y POPPERS de Bootstrap. -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>

<script src="js/Inicio.js"> </script>
<script src="js/ajax.js"> </script>
<script src="js/registro.js"></script> 
<script src="js/modal.js"> </script>


