<?php
function insert($tipo, $marca, $preco, $estoque) {
    $query = "INSERT INTO `roupa`(`tipo`, `marca`, `preco`, `estoque`) VALUES ('$tipo', '$marca', '$preco', '$estoque')";
    return $query;
}
function delete($id) {
    $query = "DELETE FROM `roupa` WHERE id = '$id'";
    return $query;
}
function updateEstoque($id, $estoque) {
    $query = "UPDATE `roupa` SET `estoque` = '$estoque' WHERE id = '$id'";
    return $query;
}
function updatePreco($id, $preco) {
    $query = "UPDATE `roupa` SET `preco` = '$preco' WHERE id = '$id'";
    return $query;
}
function selectAll() {
    $query = "SELECT * FROM `roupa`";
    return $query;
}
function selectTipoMarca($tipo, $marca) {
    $query = "SELECT * FROM `roupa` WHERE tipo = '$tipo' and marca = '$marca'";
    return $query;
}
function selectId($id) {
    $query = "SELECT * FROM `roupa` WHERE id = '$id'";
    return $query;
}
function selectTipo($tipo) {
    $query = "SELECT * FROM `roupa` WHERE tipo = '$tipo'";
    return $query;
}
function selectMarca($marca) {
    $query = "SELECT * FROM `roupa` WHERE marca = '$marca'";
    return $query;
}
function selectPrecoMenorQue($number) {
    $query = "SELECT * FROM `roupa` WHERE preco <= '$number'";
    return $query;
}
function selectPrecoMaiorQue($number) {
    $query = "SELECT * FROM `roupa` WHERE preco >= '$number'";
    return $query;
}
?>