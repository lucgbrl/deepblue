<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class One_models extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function salvar()
  {
    echo 'Saved';
  }
}
