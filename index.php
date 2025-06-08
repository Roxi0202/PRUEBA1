<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pruebas Unitarias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .function-demo {
            margin: 20px 0;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
        }
        .result {
            color: #28a745;
            font-weight: bold;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistema de Pruebas Unitarias en PHP</h1>
        
        <?php
        // Incluir el archivo de funciones
        require_once 'funciones.php';
        ?>
        
        <h2>Demostraciones de Funciones</h2>
        
        <div class="function-demo">
            <h3>1. Función Sumar</h3>
            <p>Suma de 15 + 25 = <span class="result"><?php echo sumar(15, 25); ?></span></p>
            <p>Suma de -10 + 30 = <span class="result"><?php echo sumar(-10, 30); ?></span></p>
        </div>

        <div class="function-demo">
            <h3>2. Función Es Par</h3>
            <p>¿Es 8 un número par? <span class="result"><?php echo esPar(8) ? 'Sí' : 'No'; ?></span></p>
            <p>¿Es 15 un número par? <span class="result"><?php echo esPar(15) ? 'Sí' : 'No'; ?></span></p>
        </div>

        <div class="function-demo">
            <h3>3. Función Área Rectángulo</h3>
            <p>Área de rectángulo 5x8 = <span class="result"><?php echo areaRectangulo(5, 8); ?></span></p>
            <p>Área de rectángulo 12x3 = <span class="result"><?php echo areaRectangulo(12, 3); ?></span></p>
        </div>

        <div class="function-demo">
            <h3>4. Función Es Positivo</h3>
            <p>¿Es 25 positivo? <span class="result"><?php echo esPositivo(25) ? 'Sí' : 'No'; ?></span></p>
            <p>¿Es -5 positivo? <span class="result"><?php echo esPositivo(-5) ? 'Sí' : 'No'; ?></span></p>
        </div>

        <div class="function-demo">
            <h3>5. Función Factorial</h3>
            <p>Factorial de 5 = <span class="result"><?php echo factorial(5); ?></span></p>
            <p>Factorial de 0 = <span class="result"><?php echo factorial(0); ?></span></p>
        </div>

        <div class="function-demo">
            <h3>6. Función Mayor</h3>
            <p>Mayor entre 45 y 23 = <span class="result"><?php echo mayor(45, 23); ?></span></p>
            <p>Mayor entre -10 y -5 = <span class="result"><?php echo mayor(-10, -5); ?></span></p>
        </div>

        <div class="function-demo">
            <h3>7. Función Celsius a Fahrenheit</h3>
            <p>25°C en Fahrenheit = <span class="result"><?php echo celsiusAFahrenheit(25); ?>°F</span></p>
            <p>0°C en Fahrenheit = <span class="result"><?php echo celsiusAFahrenheit(0); ?>°F</span></p>
        </div>

        <h2>Ejecutar Pruebas</h2>
        <p>Para ejecutar las pruebas unitarias, utiliza el siguiente comando en la terminal:</p>
        <code style="background-color: #e9ecef; padding: 10px; display: block; border-radius: 5px;">
            php pruebas.php
        </code>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="pruebas.php" class="button">Ver Archivo de Pruebas</a>
        </div>
    </div>
</body>
</html>
