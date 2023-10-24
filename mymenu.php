<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['peso']) && isset($_POST['altura'])) {

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = round($peso / (($altura/100) * ($altura/100)), 2);

if($imc < 18.5) {
  echo "$imc menor que 18.5. Magreza..." . PHP_EOL;
} else if($imc <= 24.9) {
  echo "$imc está entre 18.5 e 24.9. Parabens você é normal..." . PHP_EOL;
} else if($imc <= 29.9) {
  echo "$imc está entre 25 e 29.9. Sobrepeso... Ta na hora de se exercitar..." . PHP_EOL;
} else if($imc <= 34.9) {
  echo "$imc está entre 30 e 34.9. Obesidade grau I... ta saindo da jaula o monstro... dos 7 mares kkkj" . PHP_EOL;
} else if($imc <= 39.9) {
  echo "$imc está entre 35 e 39. Obesidade grau II... nova Tais Carla" . PHP_EOL;
} else {
  echo "$imc está ACIMA de 40. Obesidade grau III... Procure um médico urgentemente, mas fora do sistema solar Planeta" . PHP_EOL;
}
    }
}
?>