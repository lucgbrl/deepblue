<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class One extends CI_Controller {

	/**
	 * Controller Base
	 **/
	function __construct()
	{
			parent::__construct();
			$this->load->model('One_models', 'apelido');
	}
	public function index()
	{
		$dados['titulo'] = 'Lucas Gabriel';
		$dados['conteudo'] = 'Made with love';

		$this->load->view('one', $dados);
	}
	public function login()
	{
		/**echo 'Método login e passado o parâmetro:';
		 *echo $this->uri->segment(3);
		**/
		$this->apelido->salvar();
	}

}
