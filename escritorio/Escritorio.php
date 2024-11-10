<?php

class Escritorio {
    private $armarios = [];

    public function adicionarArmario(Armario $armario) {
        $this->armarios[] = $armario;
        echo "armario adicionado com sucesso<br>";
    }

    public function removerArmario($indice) {
        if ($indice >= 0) {
            unset($this->armarios[$indice]);
            echo "armario removido com sucesso<br>";
            return true;
        }
        return false; 
    }

    public function listarArmarios() {
        if (empty($this->armarios)) {
            echo "Nenhum armário no escritório.<br>";
        } else {
            foreach ($this->armarios as $key => $armario) {
                echo "Armário  {$key} : <br>";
                $armario->listarGavetas();
                echo "<br>";
            }
        }
    }

    public function auditoria() {
        if (empty($this->armarios)) {
            echo "Nenhum armário no escritório.<br>";
            return;
        }

        echo "Auditando o escritório...<br>";
        foreach ($this->armarios as $key => $armario) {
            echo "Armário {$key}  : <br>";
            $armario->listarGavetas();
            echo "<br>";
        }
    }
}

?>