<?php
$joaoNome = "João Filho";
$joaoPeso = 80;
$joaoAltura = 1.75;
$joaoImc = number_format($joaoPeso / ($joaoAltura*$joaoAltura), 2, ',', '.');
echo "O IMC de $joaoNome é $joaoImc. <br>";

$mariaNome = "Maria Rute";
$mariaPeso = 45;
$mariaAltura = 1.62;
$mariaImc = number_format($mariaPeso / ($mariaAltura*$mariaAltura), 2, ',', '.');
echo "O IMC de $mariaNome é $mariaImc. <br>";
?>