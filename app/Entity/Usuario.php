<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Usuario{

    /**
     * Identificador do usuário
     *@var integer
     */
    public $id;

     /**
     * Nome do usuário
     *@var string
     */
    public $nome;

 /**
     *E-mail do usuário
     *@var string
     */
    public $email;

     /**
     * Hash Senha do usuário
     *@var string
     */
    public $senha;

    /**
     * Metódo responsável de cadastrar usuraio no banco de dados 
     * @var boolean
     * */
    public function cadastrar (){
        //DATABASE
        $obDatabase = new Database('usuario');

        //Insere um novo usuário//

        $this ->id = $obDatabase->insert([
            'nome'=> $this ->nome,
            'email'=> $this ->email,
            'senha'=> $this ->senha
        ]);

        // Sucesso//
        return true;
    }

    /**
     * Metodo responsavel por retornar uma instancia de usuario com base do seu email
     * @param string $email
     * @return Usuario
     */

    public static function getUsuarioPorEmail($email){
        return ( new Database('usuarios'))->select('email = "'.$email.'"')->fetchObject(self::class);


    }

}

