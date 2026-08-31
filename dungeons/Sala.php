<?php
require_once 'Monstro.php';

class Sala {
    private $nome;
    private $tamanho;
    private $monstro;

    public function __construct(string $nome, int $tamanho, Monstro $monstro) {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->monstro = $monstro;
    }

    public function mostrarDados(): void {
        echo "Sala: {$this->nome} (Tamanho: {$this->tamanho}m²)\n";
        echo "Monstro: {$this->monstro->getNome()} (Tipo: {$this->monstro->getTipo()})\n";
    }

    // Getters e Setters
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }
    
    public function getTamanho(): int { return $this->tamanho; }
    public function setTamanho(int $tamanho): void { $this->tamanho = $tamanho; }
    
    public function getMonstro(): Monstro { return $this->monstro; }
    public function setMonstro(Monstro $monstro): void { $this->monstro = $monstro; }
}