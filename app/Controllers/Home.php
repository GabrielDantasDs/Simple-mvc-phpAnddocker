<?php

use Core\Controller;

class Home extends Controller
{
  /*
  * chama a view index.php do  /Pessoa   ou somente   /
  */
  public function index()
  { 
    $this->view('Home/index');
  }
}