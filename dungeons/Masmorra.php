<?php
require_once 'Aventureiro.php';
require_once 'Sala.php';

class Masmorra {
    private $nome;
    private $aventureiro;
    private $salas;

    public function __construct(string $nome, Aventureiro $aventureiro) {
        $this->nome = $nome;
        $this->aventureiro = $aventureiro;
        $this->salas = [];
    }

    public function adicionarSala(string $nome, int $tamanho, Monstro $monstro): void {
        $novaSala = new Sala($nome, $tamanho, $monstro);
        $this->salas[] = $novaSala;
    }

    public function mostrarSalas(): void {
        echo "\n--- Salas da Masmorra ---\n";
        foreach ($this->salas as $sala) {
            $sala->mostrarDados();
            echo "--------------------------\n";
        }
    }

    public function explorar(): void {
        echo "\n=== INICIANDO EXPLORAÇÃO ===\n";
        foreach ($this->salas as $sala) {
            $monstro = $sala->getMonstro();
            
            echo "\nEntrando na sala: {$sala->getNome()}...\n";
            echo "Monstro encontrado: {$monstro->getNome()} (HP: {$monstro->getVida()})\n";
            
            $dano = $this->aventureiro->atacar();
            echo "{$this->aventureiro->getNome()} atacou causando {$dano} de dano!\n";
            
            $monstro->receberDano($dano);
            
            if ($monstro->getVida() == 0) {
                echo "O monstro foi derrotado! {$this->aventureiro->getNome()} ganhou 50 XP.\n";
                $this->aventureiro->ganharXP(50);
            } else {
                echo "O monstro sobreviveu com {$monstro->getVida()} de vida.\n";
            }
        }
        echo "\n=== EXPLORAÇÃO CONCLUÍDA ===\n";
    }

    public function relatorio(): void {
        echo "\n===== RELATÓRIO DA MASMORRA =====\n\n";
        echo "Nome da masmorra: {$this->nome}\n\n";
        
        echo "AVENTUREIRO\n";
        echo "Nome: {$this->aventureiro->getNome()}\n";
        echo "Classe: {$this->aventureiro->getClasse()}\n";
        echo "Nível: {$this->aventureiro->getNivel()}\n";
        echo "Experiência: {$this->aventureiro->getExperiencia()}\n";
        echo "Vida: {$this->aventureiro->getVida()}\n\n";
        
        echo "SALAS\n";
        foreach ($this->salas as $sala) {
            $monstro = $sala->getMonstro();
            echo "\nSala: {$sala->getNome()}\n";
            echo "Tamanho: {$sala->getTamanho()}\n";
            echo "Monstro: {$monstro->getNome()}\n";
            echo "Tipo: {$monstro->getTipo()}\n";
            echo "Vida: {$monstro->getVida()}\n";
        }
        echo "\n===============================\n";
    }
}