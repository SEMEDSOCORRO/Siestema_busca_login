<?php

require __DIR__.'/vendor/autoload.php';



define('TITLE','Cadastrar vaga');

use \App\Entity\Vaga;
use \App\Session\Login;

Login:: requireLogin();
$obVaga = new Vaga;

//VALIDAÇÃO DO POST

if(isset($_POST['id'],$_POST['nome'],$_POST['cpf'],$_POST['nascimento'], $_POST['pai'],$_POST['mãe'], $_POST['endereço'], $_POST['telefone'],$_POST['email'],$_POST['series'], $_POST['turno'], $_POST['status'], $_POST['ativo'])) {
   
   $obVaga = new Vaga;
   $obVaga->id = $_POST['id'];
   $obVaga->aluno = $_POST['nome'];
   $obVaga->cpf = $_POST['cpf'];
   $obVaga->nascimento = $_POST['nascimento'];
   $obVaga->pai= $_POST['pai'];
   $obVaga->$mae = $_POST['mãe'];
   $obVaga->$endereco = $_POST['endereço'];
   $obVaga->telefone= $_POST['telefone'];
   $obVaga->email= $_POST['e-mail'];
   $obVaga->series = $_POST['series'];
   $obVaga->turno= $_POST['turno'];
   $obVaga->status= $_POST['status'];
   $obVaga->ativo= $_POST['ativo'];
   $obVaga->cadastrar();

   header('location: index.php?status=success');
   exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';

?>
