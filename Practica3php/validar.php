<?php

function Ticket($nombre, $altura) {
    $ticket = "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Ticket</title>
            <style>
                body {
                    font-family:cursive;
                    padding: 20px;
                }
                .ticket {
                    max-width: 300px;
                    margin: auto;
                    background:#fbc531;
                    padding: 20px;
                    border-radius: 8px;
                    text-align: center;
                }
                .ticket img {
                    max-width: 100%;
                    margin-top: 20px;
                }
            </style>
        </head>
        <body>
            <div class='ticket'>
                <h2>Ticket para Montaña Rusa</h2>
                <p>Hola $nombre,</p>
                <p>¡¡Listo!!, cumples con los requisitos para ingresar a la Montaña Rusa.</p>
                <p>Tu altura es $altura cm.</p>
                <img src='img_montaña.avif' alt='Imagen de la Montaña Rusa'>
            </div>
        </body>
        </html>
    ";
    return $ticket;
}

$nombre = "Cliente"; 
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$juicio = $_POST['juicio'];

if ($altura >= 120 && $edad > 16 && $juicio === 'acepta') {
    
    $ticketHTML = Ticket($nombre, $altura);
   
    echo $ticketHTML;
} else {
    echo "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Error de Validación</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                }
                .error{
                    text-align:center;
                    color:red;
                }    
            </style>
        </head>
        <body>
            <div class='error'>
                <h2>Lo lamentamos,no cumples con los requisitos para ingresar a la Montaña Rusa.</h2>
                <a href='index.php'>Volver al formulario</a>
            </div>
        </body>
        </html>
    ";
}
?>
