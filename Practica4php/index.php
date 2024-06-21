<!doctype html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario-Fatima Aide Hervert Espinoza</title>

</head>
<body>
  <form action="welcome.php" method="POST">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title fw-bold text-center mb-4">Registro</h2>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-12 position-relative">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" name="email" class="form-control" id="email" value="" required>
                                
                                <div class="valid-tooltip">¡Campo válido!</div>
                                <div class="invalid-tooltip">Debe completar los datos.</div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password1" class="form-control" id="password" minlength="8" maxlength="15" required>
                               
                                <div class="valid-tooltip">¡Campo válido!</div>
                                <div class="invalid-tooltip">Debe completar los datos.</div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="passwordConfirmation" class="form-label">Confirmar contraseña</label>
                                <input type="password" name="password2" class="form-control" id="passwordConfirmation" minlength="8" maxlength="15" required>
                                
                                <div class="valid-tooltip">¡Campo válido!</div>
                                <div class="invalid-tooltip">Debe completar los datos.</div>
                            </div>
                            
                            <div class="col-12">
                                <button  class="btn btn-danger fw-bold float-end" type="reset">Cancelar</button>
                                <button  class="btn btn-warning fw-bold float-end" type="submit">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
