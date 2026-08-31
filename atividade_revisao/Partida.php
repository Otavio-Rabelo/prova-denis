<?php

require_once "Jogador.php";
require_once "Inimigo.php";

class Partida
{
    private string $nome;
    private Jogador $jogador;
    private array $inimigos;
    private int $rodada;

    public function __construct(string $nome, Jogador $jogador)
    {
        $this->nome = $nome;
        $this->jogador = $jogador;
        $this->inimigos = [];
        $this->rodada = 1;
    }

    public function adicionarInimigo(Inimigo $inimigo): void
    {
        $this->inimigos[] = $inimigo;
    }

    public function mostrarInimigos(): void
    {
        foreach ($this->inimigos as $inimigo) {
            echo "<hr>";

            $inimigo->mostrarDados();
        }
    }

    public function iniciar(): void
    {
        echo "<br>A partida " . $this->nome . " vai começar!<br>";

        echo "Jogador: " . $this->jogador->getNome() . "<br>";

        echo "Inimigos participantes:<br>";

        $this->mostrarInimigos();
    }

    public function atacarInimigo(int $indice): void
    {
        // 1. Verificar se o inimigo existe
        if (!isset($this->inimigos[$indice])) {
            echo "Inimigo não encontrado!<br>";
            return;
        }

        // Pegar o inimigo escolhido
        $inimigo = $this->inimigos[$indice];

        // 2. Verificar se o jogador está vivo
        if (!$this->jogador->estaVivo()) {
            echo "O jogador está derrotado e não pode atacar!<br>";
            return;
        }

        // 3. Verificar se o inimigo está vivo
        if (!$inimigo->estaVivo()) {
            echo "O inimigo já está derrotado!<br>";
            return;
        }

        // 4. Calcular o dano do jogador
        $dano = $this->jogador->atacar();

        echo $this->jogador->getNome()
            . " atacou "
            . $inimigo->getNome()
            . " causando "
            . $dano
            . " de dano.<br>";

        // 5. Aplicar o dano ao inimigo
        $inimigo->receberDano($dano);

        // 6. Se o inimigo morreu, dar 50 de experiência
        if (!$inimigo->estaVivo()) {
            $this->jogador->ganharExperiencia(50);
        }
    }

    public function verificarFim(): bool
    {
        // Se o jogador morreu, a partida terminou
        if (!$this->jogador->estaVivo()) {
            return true;
        }

        // Verificar todos os inimigos
        foreach ($this->inimigos as $inimigo) {

            // Se encontrar um inimigo vivo,
            // a partida ainda não terminou
            if ($inimigo->estaVivo()) {
                return false;
            }
        }

        // Se chegou aqui, nenhum inimigo está vivo
        return true;
    }

    public function relatorio(): void
    {
        echo "<h2>===== RELATÓRIO =====</h2>";

        echo "<h3>Jogador</h3>";

        $this->jogador->mostrarDados();

        echo "<h3>Quantidade de inimigos: "
            . count($this->inimigos)
            . "</h3>";

        echo "<h3>Inimigos</h3>";

        $this->mostrarInimigos();

        echo "<h3>Rodada atual: "
            . $this->rodada
            . "</h3>";

        if (!$this->jogador->estaVivo()) {

            echo "Situação: Derrota!<br>";

        } elseif ($this->verificarFim()) {

            echo "Situação: Vitória!<br>";

        } else {

            echo "Situação: Partida em andamento.<br>";
        }
    }
}
?>
