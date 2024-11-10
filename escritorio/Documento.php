<?php

require_once("Item.php");
class Documento extends Item {
    private string $dataCriacao;

    public function __construct($nome, $descricao, $dataCriacao) {
        parent::__construct($nome, $descricao);
        $this->dataCriacao = $dataCriacao;
    }

    public function getDataCriacao(): string {
        return $this->dataCriacao;
    }

    public function setDataCriacao(string $dataCriacao): void {
        $this->dataCriacao = $dataCriacao;
    }
}

?>