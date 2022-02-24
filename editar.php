<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar vaga');

use \App\Entity\Vaga;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA do aluno
$obVaga = Vaga::getVaga($_GET['id']);

//VALIDAÇÃO do aluno
if(!$obVaga instanceof Vaga){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['aluno'],$_POST['cpf'],$_POST['nascimento'], $_POST['pai'],$_POST['mãe'], $_POST['endereço'], $_POST['telefone'],$_POST['email'],$_POST['series'], $_POST['turno'], $_POST['status'])){

    $obVaga = new Vaga;
    $obVaga->aluno = $_POST['aluno'];
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
    $obVaga->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';