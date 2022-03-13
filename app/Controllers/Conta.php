<?php

use core\Controller;

class Conta extends Controller
{
  /*
  * chama a view index.php do  /Pessoa   ou somente   /
  */
  public function index()
  { 
    $pessoas = $this->model('Pessoa'); 
    $pessoas = $pessoas::findAll();
    if ($_POST) {
       $create = $this->create($_POST, $pessoas);
    } // é retornado o model Users()

    foreach ($pessoas as $pessoa) { 
        $nomecpf_conc[] = [
            'id' => $pessoa->id,
            'nomecpf' => $pessoa->nome .'-'. $pessoa->cpf 
        ];
    }
    $data['pessoas'] = $nomecpf_conc;
    $data['create'] = $create;
    $this->view('conta/index',$data);
  }

  public function create($request, $pessoas) {
    return $pessoas::insertPessoa($request);

  }

}