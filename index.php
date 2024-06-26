<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Practica-Fatima Aide Hervert</title>
    
</head>
<body>
    <h2>Conversor de bases numéricas</h2> 
    <form method="post">
        <label for="numero">Ingrese el número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <label for="opcion">Seleccione la opción:</label>
        <select id="opcion" name="opcion" required>
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $numero = $_POST["numero"];
        $opcion = $_POST["opcion"];

        function convertirBase($numero, $opcion) {
            switch ($opcion) {
                case "binario":
                    return decbin($numero); 
                case "octal":
                    return decoct($numero); 
                case "hexadecimal":
                    return dechex($numero); 
                default:
                    return "Opción inválida";
            }
        }
        echo "<h3>Resultado:</h3>";
        echo "<p>El número decimal $numero convertido a $opcion es: " . convertirBase($numero, $opcion) . "</p>";
    }
    ?>
</body>
</html>
