<?php
function calcularSoma($numero1, $numero2) {
        $soma = $numero1 + $numero2; //soma é uma variavel local
        return $soma;
        
        }

$valor1 = 10;
$valor2 = 5;

$resultado = calcularSoma($valor1, $valor2); //chamando a função

echo "A soma é : " . $resultado;
#echo "A soma é: " . $soma; // Isso causa erro pois soma não e acessivel aqui

?>


<?php
function calculadora($numero1, $numero2) {
        $soma = $numero1 + $numero2; //soma é uma variavel local
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;

        return array($soma, $subtracao, $subtracao);
        
        }

$valor1 = 10;
$valor2 = 5;

$resultado = calculadora($valor1, $valor2); //chamando a função

echo "A soma é : " . $resultado[0] . "<br>";
echo "A subtração é: " . $resultado[1] . "<br>";
echo "A multiplicação é: " . $resultado[2] . "<br>";
?>
