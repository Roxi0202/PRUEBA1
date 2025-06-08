<?php

/**
 * Función para sumar dos valores
 * @param float $valorA Primer valor
 * @param float $valorB Segundo valor
 * @return float Resultado de la suma
 */
function sumar($valorA, $valorB) {
    return $valorA + $valorB;
}

/**
 * Función para verificar si un número es par
 * @param int $numero Número a verificar
 * @return bool True si es par, false si es impar
 */
function esPar($numero) {
    return $numero % 2 === 0;
}

/**
 * Función para calcular el área de un rectángulo
 * @param float $largo Largo del rectángulo
 * @param float $ancho Ancho del rectángulo
 * @return float Área del rectángulo
 */
function areaRectangulo($largo, $ancho) {
    return $largo * $ancho;
}

/**
 * Función para verificar si un número es positivo
 * @param float $numero Número a verificar
 * @return bool True si es positivo, false si no
 */
function esPositivo($numero) {
    return $numero > 0;
}

/**
 * Función para calcular el factorial de un número
 * @param int $numero Número para calcular factorial
 * @return int Factorial del número
 */
function factorial($numero) {
    if ($numero < 0) {
        return -1; // Error para números negativos
    }
    if ($numero === 0 || $numero === 1) {
        return 1;
    }
    $resultado = 1;
    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

/**
 * Función para verificar si una cadena está vacía
 * @param string $cadena Cadena a verificar
 * @return bool True si está vacía, false si no
 */
function estaVacia($cadena) {
    return empty(trim($cadena));
}

/**
 * Función para obtener el mayor de dos números
 * @param float $num1 Primer número
 * @param float $num2 Segundo número
 * @return float El número mayor
 */
function mayor($num1, $num2) {
    return $num1 > $num2 ? $num1 : $num2;
}

/**
 * Función para contar caracteres de una cadena
 * @param string $cadena Cadena a contar
 * @return int Número de caracteres
 */
function contarCaracteres($cadena) {
    return strlen($cadena);
}

/**
 * Función para verificar si un número es múltiplo de otro
 * @param int $numero Número a verificar
 * @param int $multiplo Múltiplo a verificar
 * @return bool True si es múltiplo, false si no
 */
function esMultiplo($numero, $multiplo) {
    if ($multiplo === 0) {
        return false;
    }
    return $numero % $multiplo === 0;
}

/**
 * Función para convertir Celsius a Fahrenheit
 * @param float $celsius Temperatura en Celsius
 * @return float Temperatura en Fahrenheit
 */
function celsiusAFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

?>
