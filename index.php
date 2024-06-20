<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica-Fatima Aide Hervert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#a29bfe;
            padding: 20px;
        }
        h2 {
            color: #55efc4;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
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
