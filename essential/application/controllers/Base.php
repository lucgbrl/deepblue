<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	/**
	 *
	 * Controller Base para replicação
	 **/
	function __construct()
	{
		//Invoca o contrutor da classe CI_Controller para a 
			parent::__construct();
	}
	public function index()
	{
		//Método padrão do Controller
	}
}
