<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validador para Montaña Rusa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Validador para Montaña Rusa</h2>
    <form action="validar.php" method="POST">
      <div class="form-group">
        <label for="altura">Altura(cm):</label>
        <input type="number" id="altura" name="altura"  required>
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required>
      </div>
      <div class="form-group">
        <label>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label><br>
        <input type="radio" id="acepta" name="juicio" value="acepta" required>
        <label for="acepta">Sí</label>
        <input type="radio" id="rechaza" name="juicio" value="rechaza">
        <label for="rechaza">No</label>
      </div>
      <div class="form-group">
        <button type="submit" class="button">Validar</button>
      </div>
    </form>
  </div>

    


</body>
</html>
