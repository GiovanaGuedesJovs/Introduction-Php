<?php

// Operadores

echo "<br>OPERADORES EM PHP:<br><br>";

$n1 = 90;
$n2 = 30;

$soma = $n1 + $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;
$subtracao = $n1 - $n2;
$resto = 10 % 2;

echo "A soma é: $soma. <br>A subtração é: $subtracao. <br>A multiplicação é: $multiplicacao.<br>A divisao é : $divisao.<br>";

// Estruras de controle 

echo "<br><br>ESTRUTURAS DE CONTROLE:<br><br>";

echo "Verificar se número é ímpar com If Else:";

$numero = 15;

echo "<br>";

if($numero % 2 == 0){
    echo "O número $numero é par.";
}else{
    echo "O número $numero é ímpar.";
}

echo "<br><br>Verificando opção escolhida com Switch:<br>";

$opcao = 1;
switch($opcao){
    case 1:
        echo "Opção escolhida 1.";
    break;
    case 2:
        echo "Opção escolhida 2.";
    break;
    default:
        echo "Opção inválida.";
}

echo "<br><br>Verificando se a pessoa é maior de idade com Operador Ternário:<br>";

$idade = 12;
echo ($idade>=18)?"A pessoa é maior de idade.":"A pessoa é menor de idade.";

// Estruturas de Repetição

echo "<br><br><br>ESTRUTURAS DE REPETIÇÃO: <br><br>";

echo "Contagem de 1 a 10 com For: <br>";

for($i = 1; $i <= 10; $i++){
    echo $i.'<br/>';
}

echo "<br>Contagem de 10 a 1 com For: <br>";

for($j = 10; $j > 0; $j--){
    echo $j.'<br/>';
}

echo "<br>Contagem simultânea com For: <br>";

for($x = 10, $y = 1; $x > 0, $y <= 10; $x--, $y++){
    echo $x.' - '.$y.'<br/>';
}

echo "<br>Contagem de 1 a 10 com While: <br>";

$contador = 1;

while($contador < 10){
    echo "$contador <br/>";
    $contador++;
}

echo "<br><br>ARRAYLIST EM PHP:<br>";

$array = ["Maria", 15, 25.5];
$array [] = "João"; // Adiciona o valor na última posição.
$array [2] = 7; // Adiciona o valor na posição específica.
$array ["Curso: "] = "Informática"; // Adiciona o valor na posição específica criada.

echo "<br>";

echo "Imprimindo um array: <br>";

var_dump($array); // Exibe na tela detalhes da variável.

echo "<br><br>Imprimindo um array associativo: ";

$aluna = [
    "Nome: " => "Giovana", // Ou [ echo "O nome é ".$array["Nome: "]; ]
    "Idade: " => 18,
    "Média: " => 10.0
];

echo "<br>";

var_dump($aluna);
// print_r($aluna);  -> Impressão sem os tipos das variáveis.

echo "<br><br>Imprimir posições do vetor com Foreach: <br>";

foreach($aluna as $chave => $valor){
    echo $chave;
    echo $valor;
    echo "<br>";
};
