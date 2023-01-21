<?php


function consumoMedio($distancia, $combustivel) {
   
    if ($distancia <= 0 || $combustivel <= 0) {
        return "Valores inválidos";
    }

  
    $consumo = $distancia / $combustivel;
    return $consumo;
}


$distancia = 500;
$combustivel = 20;
$consumo = consumoMedio($distancia, $combustivel);
echo "Consumo médio: " . $consumo . " km/l";
echo "<br>";


function gerarFibonacci($limite) {
    
    $fib1 = 0;
    $fib2 = 1;
    $fibonacci = array();

    
    array_push($fibonacci, $fib1);
    array_push($fibonacci, $fib2);

   
    while ($fib2 < $limite) {
        $temp = $fib2;
        $fib2 += $fib1;
        $fib1 = $temp;
        array_push($fibonacci, $fib2);
    }

    
    return $fibonacci;
}


$limite = 900;
$fibonacci = gerarFibonacci($limite);
print_r($fibonacci);
echo "<br>";




function binarioParaDecimal($binario) {
    $decimal = 0;
    $tamanho = strlen($binario);
    for ($i = 0; $i < $tamanho; $i++) {
        $decimal += intval($binario[$i]) * pow(2, $tamanho - $i - 1);
    }
    return $decimal;
}


function decimalParaBinario($decimal) {
    $binario = "";
    while ($decimal > 0) {
        $binario = strval($decimal % 2) . $binario;
        $decimal = floor($decimal / 2);
    }
    return $binario;
}


$binario = "1101";
$decimal = binarioParaDecimal($binario);
echo "Binário: " . $binario . " Decimal: " . $decimal . "\n";

$decimal = 10;
$binario = decimalParaBinario($decimal);
echo "Decimal: " . $decimal . " Binário: " . $binario;
echo "<br>";



function decimalParaHexadecimal($decimal) {
    return dechex($decimal);
}


function hexadecimalParaDecimal($hexadecimal) {
    return hexdec($hexadecimal);
}


$decimal = 255;
$hexadecimal = decimalParaHexadecimal($decimal);
echo "Decimal: " . $decimal . " Hexadecimal: " . $hexadecimal . "\n";

$hexadecimal = "FF";
$decimal = hexadecimalParaDecimal($hexadecimal);
echo "Hexadecimal: " . $hexadecimal . " Decimal: " . $decimal;
echo "<br>";




function hexadecimalParaBinario($hexadecimal) {
    return decbin(hexdec($hexadecimal));
}


function binarioParaHexadecimal($binario) {
    return dechex(bindec($binario));
}


$hexadecimal = "FF";
$binario = hexadecimalParaBinario($hexadecimal);
echo "Hexadecimal: " . $hexadecimal . " Binário: " . $binario . "\n";

$binario = "11111111";
$hexadecimal = binarioParaHexadecimal($binario);
echo "Binário: " . $binario . " Hexadecimal: " . $hexadecimal;
echo "<br>";



function salarioFinalVendedor($nome, $salarioFixo, $vendas) {
    $comissao = 0.15;
    $salarioComissao = $vendas * $comissao;
    $salarioFinal = $salarioFixo + $salarioComissao;
    echo "Nome: " . $nome . "\n";
    echo "Salário fixo: R$ " . $salarioFixo . "\n";
    echo "Salário final: R$ " . $salarioFinal . "\n";
}

$nome = "João";
$salarioFixo = 1000;
$vendas = 5000;
salarioFinalVendedor($nome, $salarioFixo, $vendas);
echo "<br>";




function mediaAritmetica($nome, $nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "Nome: " . $nome . "\n";
    echo "Média: " . $media . "\n";
    echo "<br>";
    echo "Nota 1: " . $nota1 . "\n";
    echo "<br>";
    echo "Nota 2: " . $nota2 . "\n";
    echo "<br>";
    echo "Nota 3: " . $nota3 . "\n";
}


$nome = "João";
$nota1 = 7;
$nota2 = 8;
$nota3 = 9;
mediaAritmetica($nome, $nota1, $nota2, $nota3);
echo "<br>";




function celsiusParaFahrenheit($temperaturaCelsius) {
    $temperaturaFahrenheit = (9*$temperaturaCelsius + 160)/5;
    echo $temperaturaCelsius . " graus Celsius é equivalente a " . 
    $temperaturaFahrenheit . " graus Fahrenheit.";
}


$temperaturaCelsius = 30;
celsiusParaFahrenheit($temperaturaCelsius);
echo "<br>";


    // Recebe a idade em dias
    $idade_dias = 365*15+30*4+15;

    // Calcula a idade em anos
    $anos = floor($idade_dias / 365);

    // Calcula o número de dias restantes
    $dias_restantes = $idade_dias % 365;

    // Calcula a idade em meses
    $meses = floor($dias_restantes / 30);

    // Calcula o número de dias restantes
    $dias_restantes = $dias_restantes % 30;

    // Exibe a idade em anos, meses e dias
    echo "A idade é de $anos anos, $meses meses e $dias_restantes dias";
    echo "<br>";


?>
