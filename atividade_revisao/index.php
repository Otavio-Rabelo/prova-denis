<?php

require_once "Personagem.php";
require_once "Jogador.php";
require_once "Inimigo.php";
require_once "Partida.php";

$jogador = new Jogador("Alanzoka", 1, 50, 100, 0, "Orc", 100, 100 );
$jogador->mostrarDados();
$jogador->interagir();
$dano = $jogador->atacar();
echo "Dano do ataque normal: "
    . $dano
    . "<br>";

echo "<br>";

$danoHabilidade = $jogador->usarHabilidade();
echo "Dano da habilidade: "
    . $danoHabilidade
    . "<br>";

echo "<br>";
echo "<h3>Jogador depois de usar habilidade:</h3>";

$jogador->mostrarDados();

echo "<hr>";

$inimigo1 = new Inimigo("Litch", 20, 70, 80, 20, "Dragão", 5 );
$inimigo2= new Inimigo("Peppa pig", 67, 50, 100, 40, "Pig", 69);
$inimigo3 = new Inimigo("Freeza", 3, 60, 100, 30, "Demon", 28 );
$inimigo1->interagir();
$inimigo2->interagir();
$inimigo3->interagir();
$inimigo1->mostrarDados();
$inimigo2->mostrarDados();
$inimigo3->mostrarDados();

$partida = new Partida("A partida", $jogador);
$partida->adicionarInimigo($inimigo1);
$partida->adicionarInimigo($inimigo2);
$partida->adicionarInimigo($inimigo3);
$partida->iniciar();

echo "<hr>";
$partida->mostrarInimigos();
$partida->atacarInimigo(0);

echo "<br>";

$partida->atacarInimigo(1);

echo "<hr>";
echo "<h2>===== HABILIDADE =====</h2>";

$dano = $jogador->usarHabilidade();

echo "Dano causado pela habilidade: "
    . $dano
    . "<br>";


// Aplicando o dano ao terceiro inimigo

$inimigo3->receberDano($dano);

echo "<hr>";


// ========================================
// MOSTRANDO INIMIGOS NOVAMENTE
// ========================================

echo "<h2>===== INIMIGOS APÓS ATAQUES =====</h2>";

$partida->mostrarInimigos();

echo "<hr>";


// ========================================
// INIMIGO ATACA JOGADOR
// ========================================

echo "<h2>===== INIMIGO ATACANDO =====</h2>";

$danoInimigo = $inimigo1->atacar();

echo $inimigo1->getNome()
    . " atacou "
    . $jogador->getNome()
    . " causando "
    . $danoInimigo
    . " de dano.<br>";

$jogador->receberDano($danoInimigo);

echo "<br>";


// ========================================
// MOSTRANDO JOGADOR NOVAMENTE
// ========================================

$jogador->mostrarDados();

echo "<hr>";


// ========================================
// EXPERIÊNCIA
// ========================================

echo "<h2>===== EXPERIÊNCIA =====</h2>";

$jogador->ganharExperiencia(50);

echo "<br>";

$jogador->ganharExperiencia(50);

echo "<br>";

$jogador->mostrarDados();

echo "<hr>";


// ========================================
// RECUPERAR MANA
// ========================================

echo "<h2>===== RECUPERANDO MANA =====</h2>";

$jogador->recuperarMana();

$jogador->mostrarDados();

echo "<hr>";


// ========================================
// VERIFICAR FIM
// ========================================

echo "<h2>===== SITUAÇÃO DA PARTIDA =====</h2>";

if ($partida->verificarFim()) {

    echo "A partida terminou.<br>";

} else {

    echo "A partida ainda está em andamento.<br>";
}

echo "<hr>";


// ========================================
// RELATÓRIO
// ========================================

$partida->relatorio();