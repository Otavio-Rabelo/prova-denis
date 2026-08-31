<?php
// Importando as classes
require_once 'Aventureiro.php';
require_once 'Monstro.php';
require_once 'Masmorra.php';

echo "<pre>"; // Mantém a formatação legível no navegador

// Aventureiro
$thorin = new Aventureiro("Thorin", 1, 0, "Guerreiro", 100, 25);

// Monstros (Nome, Nível, Experiência inicial, Tipo, Vida, Ataque)
$goblin = new Monstro("Goblin", 1, 0, "Goblin", 30, 10);
$orc = new Monstro("Orc", 2, 0, "Orc", 60, 15);
$dragao = new Monstro("Dragão", 5, 0, "Dragão", 100, 30);

// Masmorra e Salas
$moria = new Masmorra("Cavernas de Moria", $thorin);
$moria->adicionarSala("Entrada", 20, $goblin);
$moria->adicionarSala("Salão dos Orcs", 50, $orc);
$moria->adicionarSala("Covil do Dragão", 100, $dragao);


// === TESTES OBRIGATÓRIOS ===

// Teste 1: Mostrar os dados do aventureiro
echo "--- TESTE 1: DADOS DO AVENTUREIRO ---\n";
$thorin->mostrarDados();
echo "\n";

// Teste 2: Interagir aventureiro
echo "--- TESTE 2: INTERAÇÃO AVENTUREIRO ---\n";
$thorin->interagir();
echo "\n";

// Teste 3: Interagir monstros
echo "--- TESTE 3: INTERAÇÃO MONSTROS ---\n";
$goblin->interagir();
$orc->interagir();
$dragao->interagir();
echo "\n";

// Teste 4: Mostrar todas as salas da masmorra
echo "--- TESTE 4: SALAS DA MASMORRA ---\n";
$moria->mostrarSalas();

// Teste 5: Explorar a masmorra
echo "--- TESTE 5: EXPLORAR MASMORRA ---\n";
$moria->explorar();

// Teste 6: Relatório final
echo "--- TESTE 6: RELATÓRIO FINAL ---\n";
$moria->relatorio();

// Teste 7: Print_r
echo "--- TESTE 7: DADOS BRUTOS DOS OBJETOS ---\n";
print_r($thorin);
print_r($moria);

echo "</pre>";
?>