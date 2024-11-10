<?php

class Armario {
    private $gavetas = [];

    public function adicionarGaveta(Gaveta $gaveta) {
        $this->gavetas[] = $gaveta;
        echo "gaveta adicionada com sucesso<br>";
    }

    public function removerGaveta($indice) {
        if ($indice >= 0) {
            unset($this->gavetas[$indice]);
            echo "gaveta removida com sucesso<br>";
            return true;
        }
        return false; 
    }

    public function listarGavetas() {
        if (empty($this->gavetas)) {
            echo "Nenhuma gaveta no armário.<br>";
        } else {
            foreach ($this->gavetas as $key => $gaveta) {
                echo "Gaveta  {$key} : <br>";
                $gaveta->listarItens();
                echo "<br>";
            }
        }
    }
}

?>