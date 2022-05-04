<?php



$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecentes';
$categorias[] = 'adulto';
//p\\rint_r($categorias);

$nome = 'Eduardo';
$idade = "18";

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
        echo 'infantil';

}elseif($idade >= 13 && $idade <= 18){
        echo 'adolecente';
}else
        echo 'adulto';
?>