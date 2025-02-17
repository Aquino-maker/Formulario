<?php
global $array;
$hello = "hello world";
$code = "<span class='tag'>#Let'sGoProgramar </span>";
echo "<p>$code</p>";
echo "<p>$hello</p>";
echo '<h3>'. $hello ." ". $code .'</h3>';

$array = array(
    "nome" => "Ambrósio",
    "idade" => 21,
    "sexo" => "Masculino"
);

echo "<pre>". print_r($array, true). "</pre>";


$name = "<article><h1>Nome: <b>%s</b></h1><p>Idade: <b>%s</b></p></article>";
$title = "$hello '.' $name";
$subtitle = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem 
Ipsum.
";

$userFirstName = "Luan";
$userLastName = "Souza";
$userAge = 20;
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge}</span></p>";

$userEmail = "luan.a.souza10@aluno.senai.br";
echo "<p>{$userEmail}</p>";

$company = "SENAI";
$$company = "SERVIÇO NACIONAL DE APRENDIZAGEM INDUSTRIAL";
echo "<p>{$company} {$SENAI}</p>";

$string = "Olá mundo"; // texto
$array = [$string]; // Um Array pode ser uma string mas a string nunca pode ser um array
$object = new stdClass(); // POO
$null = null; // Nulo
$int = 1; // Números inteiros
$float = 3.14; // Números flutuantes.
var_dump($array, $object, $null, $int, $float);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => ($relatedA == $relatedB),
    "a === b" => ($relatedA === $relatedB),
    "a != b" => ($relatedA != $relatedB),
    "a !== b" => ($relatedA !== $relatedB),
];
var_dump($related);
$calcA = 5;
$calcB = "10";
$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA / $calcB),
    "a ** b" => ($calcA / $calcB),
];
var_dump($calc);