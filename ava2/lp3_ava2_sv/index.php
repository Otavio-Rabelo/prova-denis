<?php
require_once "Fazendeiro.php";
require_once "Fazenda.php";
require_once "Npc.php";

$farmer = new Fazendeiro("Tião", "Patrocity");
$farmer->mostrarDados();
$farmer->interagir();
$farmer->trabalhar();
$farmer->trabalhar();
$farmer->mostrarDados();
$farmer->trabalhar();
$farmer->mostrarDados();

$npc = new Npc("Leila", "Vendedora de sementes");
$npc->interagir();

$farm = new Fazenda("Santo Antônio", $farmer);

$farm->produzirCultura("Milho", 5);
$farm->produzirCultura("Soja", 8);
$farm->produzirCultura("Café", 20);
$farm->produzirCultura("Batata", 10);

$farm->imprimirRelatorio();
