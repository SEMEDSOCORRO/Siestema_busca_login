<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vaga{

  /**
   * Identificador único da vaga
   * @var integer
   */
  public $id;

  /**
   * Nome do aluno
   * @var string
   */
  public $nome;

  /**
   * Cpf do aluno
   * @var string
   */
  public $cpf;

  /**
   * nascimento do aluno
   * @var string
   */
  public $nascimento;

  /**
   * Pai do aluno
   * @var string
   */
  public $pai;

  /**
   * Mãe do aluno
   * @var string
   */
  public $mae;

  /**
   * Endereço do aluno
   * @var string
   */
  public $endereco;

  /**
   * telefone do aluno
   * @var string
   */
  public $telefone;

  /**
   * E-mail do  aluno
   * @var string
   */
  public $email;

  /**
   * Series do aluno
   * @var string
   */
  public $series;

  /**
   *turno do aluno
   * @var string
   */
  public $turno;

  /**
   * Statusdo aluno
   * @var string
   */
  public $status;

  /**
   * Define se se aluno está ativo
   * @var string(s/n)
   */
  public $ativo;

  /**
   * Data de cadstro do aluno
   * @var string
   */
  public $data;

  /**
   * Método responsável por cadastrar um aluno no banco de dados
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR o aluno no banco de dados
    $obDatabase = new Database('vagas');
    $this->id = $obDatabase->insert([
                                      'nome'=> $this->nome,
                                      'cpf' => $this->cpf,
                                      'nascimento' => $this->nasciemnto,
                                      'pai' => $this->pai,
                                      'mae' => $this->mae,
                                      'endereço' => $this->endereço,
                                      'telefone' => $this->telefone,
                                      'email' => $this->email,
                                      'series' => $this->series,
                                      'turno' => $this->turno,
                                      'status' => $this->status,
                                      'ativo'=> $this->ativo,
                                      'data'=> $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o novo aluno no  banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('vagas'))->update('id = '.$this->id,[
                                                              'nome'=> $this->nome,
                                                              'cpf' => $this->cpf,
                                                              'nascimento' => $this->nasciemnto,
                                                              'pai' => $this->pai,
                                                              'mae' => $this->mae,
                                                              'endereço' => $this->endereço,
                                                              'telefone' => $this->telefone,
                                                              'email' => $this->email,
                                                              'series' => $this->series,
                                                              'turno' => $this->turno,
                                                              'status' => $this->status,
                                                              'ativo'=> $this->ativo,
                                                              'data'=> $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir aluno cadastrado no banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('vagas'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as vagas do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getVagas($where = null, $order = null, $limit = null){
    return (new Database('vagas'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma vaga com base em seu ID
   * @param  integer $id
   * @return Vaga
   */
  public static function getVaga($id){
    return (new Database('vagas'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}