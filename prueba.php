<?php

// Incluir el archivo de funciones a probar
require_once 'funciones.php';

/**
 * Función personalizada para realizar pruebas
 * @param string $descripcion Descripción de la prueba
 * @param bool $condicion Condición a evaluar
 * @param string $mensajeError Mensaje en caso de error
 */
function probar($descripcion, $condicion, $mensajeError) {
    if (!$condicion) {
        echo "❌ FALLO: " . $descripcion . " - " . $mensajeError . "\n";
    } else {
        echo "✅ PASÓ: " . $descripcion . "\n";
    }
}

echo "=== EJECUTANDO PRUEBAS UNITARIAS ===\n\n";

// PRUEBA 1: Función sumar - casos positivos
probar(
    "Prueba 1: Suma básica",
    sumar(2, 3) === 5,
    "2 + 3 debería ser 5"
);

// PRUEBA 2: Función sumar - números negativos
probar(
    "Prueba 2: Suma con números negativos",
    sumar(-5, 3) === -2,
    "-5 + 3 debería ser -2"
);

// PRUEBA 3: Función esPar - número par
probar(
    "Prueba 3: Verificar número par",
    esPar(4) === true,
    "4 debería ser par"
);

// PRUEBA 4: Función esPar - número impar
probar(
    "Prueba 4: Verificar número impar",
    esPar(7) === false,
    "7 no debería ser par"
);

// PRUEBA 5: Función areaRectangulo
probar(
    "Prueba 5: Área de rectángulo",
    areaRectangulo(5, 4) === 20,
    "Área de rectángulo 5x4 debería ser 20"
);

// PRUEBA 6: Función esPositivo - número positivo
probar(
    "Prueba 6: Número positivo",
    esPositivo(10) === true,
    "10 debería ser positivo"
);

// PRUEBA 7: Función esPositivo - número negativo
probar(
    "Prueba 7: Número negativo",
    esPositivo(-5) === false,
    "-5 no debería ser positivo"
);

// PRUEBA 8: Función factorial
probar(
    "Prueba 8: Factorial de 5",
    factorial(5) === 120,
    "Factorial de 5 debería ser 120"
);

// PRUEBA 9: Función factorial - caso base
probar(
    "Prueba 9: Factorial de 0",
    factorial(0) === 1,
    "Factorial de 0 debería ser 1"
);

// PRUEBA 10: Función estaVacia - cadena vacía
probar(
    "Prueba 10: Cadena vacía",
    estaVacia("") === true,
    "Cadena vacía debería devolver true"
);

// PRUEBA 11: Función estaVacia - cadena con contenido
probar(
    "Prueba 11: Cadena con contenido",
    estaVacia("Hola mundo") === false,
    "Cadena 'Hola mundo' no debería estar vacía"
);

// PRUEBA 12: Función mayor
probar(
    "Prueba 12: Número mayor",
    mayor(10, 5) === 10,
    "Mayor entre 10 y 5 debería ser 10"
);

// PRUEBA 13: Función contarCaracteres
probar(
    "Prueba 13: Contar caracteres",
    contarCaracteres("Hola") === 4,
    "La palabra 'Hola' debería tener 4 caracteres"
);

// PRUEBA 14: Función esMultiplo
probar(
    "Prueba 14: Múltiplo de 3",
    esMultiplo(15, 3) === true,
    "15 debería ser múltiplo de 3"
);

// PRUEBA 15: Función esMultiplo - caso negativo
probar(
    "Prueba 15: No múltiplo",
    esMultiplo(7, 3) === false,
    "7 no debería ser múltiplo de 3"
);

// PRUEBA 16: Función celsiusAFahrenheit
probar(
    "Prueba 16: Conversión Celsius a Fahrenheit",
    celsiusAFahrenheit(0) === 32,
    "0°C debería ser 32°F"
);

// PRUEBA 17: Función celsiusAFahrenheit - caso típico
probar(
    "Prueba 17: Conversión 25°C a Fahrenheit",
    celsiusAFahrenheit(25) === 77,
    "25°C debería ser 77°F"
);

// PRUEBA 18: Función sumar - números decimales
probar(
    "Prueba 18: Suma con decimales",
    abs(sumar(2.5, 3.7) - 6.2) < 0.001,
    "2.5 + 3.7 debería ser aproximadamente 6.2"
);

// PRUEBA ADICIONAL con assert (requiere configuración PHP para mostrar errores)
echo "\n=== PRUEBAS CON ASSERT ===\n";

// Configurar assert para mostrar errores
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);

// Pruebas con assert
assert(sumar(10, 20) === 30, "10 + 20 debería ser 30");
assert(esPar(8) === true, "8 debería ser par");
assert(factorial(4) === 24, "Factorial de 4 debería ser 24");

echo "\n=== RESUMEN ===\n";
echo "✅ Todas las pruebas han sido ejecutadas.\n";
echo "📊 Total de pruebas: 18 pruebas unitarias + 3 pruebas con assert\n";
echo "🚀 Para ejecutar: php pruebas.php\n";

?>
