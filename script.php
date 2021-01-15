<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);
//var_dump($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*
var_dump($nome); //info dos tipos da variavel acima
var_dump($idade);
*/


//validacao dos dados
if(empty($nome)) // nome nao pode ser vazio
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Não seja idiota';
    header('location:index.php');
    return;
}

else if(strlen($nome)< 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve ter mais de 3 caracteres.';
    header('location:index.php');
    return;
}

else if(strlen($nome)>20){
    $_SESSION['mensagem-de-erro'] = 'O nome nao pode ser muito extenso, sabichão';
    header('location:index.php');  
    return;
}
// validar idade apenas com numero
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Insera números sua anta';
    header('location:index.php');  
    return;
}


//condicional para identificar categoria
if($idade >= 6 && $idade <= 12)
{//echo 'infantil';
    for ($i=0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
         //   echo "O nadador ",$nome, " ", "compete na categoria infantil";
        $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. "compete na categoria " .$categorias[$i];
        header('location:index.php');
        return;

        }
}
else if($idade>= 13 && $idade <=18){
//echo 'adolescente';
for ($i=0; $i < count ($categorias); $i++)
{
    if ($categorias[$i] == 'adolescente')
     //   echo "O nadador ",$nome, " ", "compete na categoria adolescente";
     $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. "compete na categoria " .$categorias[$i];
     header('location:index.php');
     return;
}
}
else{
//echo 'adulto';
for ($i=0; $i <count ($categorias); $i++)
{
    if ($categorias[$i] == 'adulto')
     //   echo "O nadador ",$nome, " ", "compete na categoria adulto";
     $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. "compete na categoria " .$categorias[$i];
     header('location:index.php');
     return;
}
}
