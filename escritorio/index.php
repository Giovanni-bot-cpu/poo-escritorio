<?php

require_once("Escritorio.php");
require_once("Documento.php");
require_once("Armario.php");
require_once("Gaveta.php");
require_once("Item.php");
require_once("Objeto.php");
require_once("Pasta.php");

$documento = new Documento("Relatório Financeiro", "Relatório anual", "2024-01-01");
$objeto = new Objeto("Caneta", "Caneta azul", 0.05);
$pasta = new Pasta("Pastas de RH", "Pastas com documentos de recursos humanos", "RH");


$gaveta1 = new Gaveta();
$gaveta1->adicionarItem($documento);
$gaveta1->adicionarItem($objeto);

$gaveta2 = new Gaveta();
$gaveta2->adicionarItem($pasta);

$gaveta3 = new Gaveta();
$gaveta3->adicionarItem($objeto);


$armario1 = new Armario();
$armario1->adicionarGaveta($gaveta1);

$armario2 = new Armario();
$armario2->adicionarGaveta($gaveta2);

$armario3 = new Armario();
$armario3->adicionarGaveta($gaveta3);

$escritorio = new Escritorio();
$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);
$escritorio->adicionarArmario($armario3);

$gaveta1->removerItem("Caneta");
$armario1->removerGaveta(0);
$escritorio->removerArmario(1);

$escritorio->auditoria();
?>