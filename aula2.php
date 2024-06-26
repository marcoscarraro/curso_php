<?php

$nome = "Pedro Brasil";
$idade = 18;
$cidade = "Bento Gonçalves - São Pedro";
echo "Seja bem vindo $nome à sua cidade $cidade, a qual recebe você de braços abertos, sua visita é muito importante para nós, consuma dos nossos restaurantes a melhor comida e carta de vinhos.";

echo "<br>";

if ($idade >= 18){
    echo "O $nome é maior de idade!";
}else{
    echo "O $nome, não pode dirigir carros!";
}

echo "<br>";
echo "Super calculadora avançada da NASA 4.0";
echo "<br>";
$valorA = 99;
$valorB = 3;
$operacao = "divisao";
$resultado="";

if($operacao == "soma" || $operacao == "adicao" || $operacao == "mais"){
    $resultado = $valorA + $valorB;
}elseif($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA - $valorB;
}elseif($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif($operacao == "dividir" || $operacao == "divisao"){
    $resultado = $valorA / $valorB;
}else{
    echo "Somente são aceitos os seguintes parâmetros<br>
    soma<br>
    subtrair<br>
    multiplicar<br>
    dividir<br>";
}

if($resultado != ""){
    echo "A operação escolhida foi $operacao 
    com os valores $valorA e $valorB e o 
    resultado obtido é $resultado.";
}


// Testa se a pessoa pode fazer a carteira de motorista
// Precisa ser maior de 18 anos, e ter mais de R$ 1.000,00
$idadePessoa=18;
$dinheiroNaCarteira=999.99;

if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Parabéns, você pode fazer a carteira de
    motorista!";
}
// FALTA FAZER a validação da IDADE e do DINHEIRO
// Se não tiver idade informar que precisa ser maior de 18
// Se não tiver dinheiro precisa informar o valor de 1k
// Se não tiver idade e nem dinheiro informar.



?>