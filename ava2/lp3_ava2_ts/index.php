
<?php

require_once "Sim.php";
require_once "Npc.php";
require_once "Casa.php";
require_once "Comodo.php";

$sim = new Sim("José", "Masculino");
$sim->mostrarDados();
$sim->interagir();
$sim->trabalhar(40);
$sim->trabalhar(40);
$sim->mostrarDados();
$sim->trabalhar(40);
$sim->mostrarDados();

$npc = new Npc("Ana", "construtora");
$npc->interagir();

$casa = new Casa("Mansão do Zé", $sim);
$casa->adicionarComodo("Sala", 8);
$casa->adicionarComodo("Cozinha", 12);
$casa->adicionarComodo("Quarto", 9);
$casa->adicionarComodo("Banheiro", 4);


$casa->imprimirRelatorio();

echo "<pre>";
print_r($casa->getEspacos());

print_r($sim);

print_r($npc);
?>
