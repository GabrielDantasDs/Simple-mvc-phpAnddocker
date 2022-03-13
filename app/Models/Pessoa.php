<?php

namespace models;

use Core\Database;
use Exception;
use PDO;
class Pessoa
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM pessoas');
    return $result->fetchAll(PDO::FETCH_OBJ);
  }

  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único do usuário
  *
  * @return   array
  */
  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM pessoas WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_OBJ);
  }

  public static function insertPessoa($pessoa) {
    $conn = new Database();
    $success = true;
    try {
        $conn->executeQuery('INSERT INTO  pessoas (nome, cpf, endereco) values ("'.$pessoa['nome'].'", "'.$pessoa['cpf'].'", "'.$pessoa['endereco'].'");'
    );
    } catch(Exception $e) {
        $success = false;
        echo $e->getMessage();
    }
    return $success;
  }

}