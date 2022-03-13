<?php

use core\Controller;

class Pessoa extends Controller
{
  /*
  * chama a view index.php do  /Pessoa   ou somente   /
  */
  public function index()
  { 
    $pessoas = $this->model('Pessoa');  
    if(isset($_POST['submitbtn']) && $_POST['randcheck']==$_SESSION['rand'])
    {
        $create = $this->create($_POST, $pessoas);
    } 
    $data['pessoas'] = $pessoas::findAll();;
    $data['create'] = $create;
    $this->view('pessoa/index',$data);
  }

  public function create($request, $pessoas) {
    return $pessoas::insertPessoa($request);
    unset($_POST);
  }

  public function Createhash($length) {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while ($i <= ($length - 1)) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
  }

}