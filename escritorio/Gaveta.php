<?php

class Gaveta {
    private $itens = [];

    public function adicionarItem(Item $item) {
        $this->itens[] = $item;
        echo "item adicionado com sucesso<br>";
    }

    public function removerItem($nome) {
        foreach ($this->itens as $key => $item) {
            if ($item->getNome() == $nome) {
                unset($this->itens[$key]); 
                echo "item removido com sucesso<br>";
                return true;
            }
        }
        return false; 
    }

    public function listarItens() {
        if (empty($this->itens)) {
            echo "Nenhum item na gaveta.<br>";
        } else {
            foreach ($this->itens as $item) {
                echo "Nome:   {$item->getNome()}  , Descrição: {$item->getDescricao()} <br>";
            }
        }
    }
}

?>