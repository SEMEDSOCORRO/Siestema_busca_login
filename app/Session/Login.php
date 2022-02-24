<?php

namespace App\Session;

class Login{

// Metodo responsavel de inicira a sessão//

private static function init(){
  if(session_status() !== PHP_SESSION_ACTIVE){

    //INICIA A SESSÃO//
    session_start();
  }
}
  //Metodo responsavel por retornar a sessão//
  public static function getUsuarioLogado(){
    //Inicia a sessão
    self::init();

    //Retorna dados do USUARIO
    return self::isLogged() ? $_SESSION['usuario'] : null;

  }

  //Metodo de usuario por logar o usuario
  
  public static function login($obUsuario){

    //Inicia a sessão
    self::init();

    //Sessão de usuario
    $_SESSION['usuario'] = [
      'id' => $obUsuario->id,
      'nome' => $obUsuario->nome,
      'email' => $obUsuario->email
    ];

    //Redireciona para o sistema //

    header('location:index.php');
    exit;
  }
  //Metodo responsavel para deslogar o usuario//
  public static function logout(){
    //Inicia a sessão
    self::init();
    //Remove a sessão do usuario//
    unset($_SESSION['usuario']);
    header('location:login.php');
    exit;
  }

// Método responsável por esta esta logado//

public static function isLogged(){

  //Inicia a sessão
  self::init();

 //Validação da sessão//
  return isset($_SESSION['usuario']['id']);
}

public static function requireLogin(){
    if(!self::isLogged()){
    header('location: login.php');
    exit;
   }
 }

public static function requireLogout(){
    if(self::isLogged()){
    header('location: index.php');
    exit;
   }
 }



}