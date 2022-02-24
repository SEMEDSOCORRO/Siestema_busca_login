<?php

require __DIR__.'/vendor/autoload.php';


use \App\Entity\Usuario;
use \App\Session\Login;

Login:: requireLogout();

//mMemsagens de alerta dos formulários

$alertaLogin ='';
$alertaCadastro ='';

if(isset($_POST['acao'])){

   switch($_POST['acao']){
        case 'logar': 
        
         //Busca usuário por email //
         $obUsurario = Usuario::getUsuarioPorEmail($_POST['email']);

         
            //Loga usuario//
         Login:: login($obUsuario);

         break;

         case 'cadastrar';

         //Validação dos campos obrigatórios//

         if(isset($_POST['nome'], $_POST['email'], $_POST['senha'])){
            

            $obUsuario = new Usuario;
            $obUsuario ->nome = $_POST['nome'];
            $obUsuario->email = $_POST['email'];
            $obUsuario->senha= password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $obUsuario->cadastrar();

         }

            
            break;

   }


}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-login.php';
include __DIR__.'/includes/footer.php';

