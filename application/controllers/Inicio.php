<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends  CI_Controller
{
	
	public function __contructor()
	{
		parent:: Contoller();
	}

	public function index()
	{
		$this->load->view("vistas/head");
		$this->load->view("vistas/inicio/menu");
		$this->load->view("vistas/inicio/body");
		$this->load->view("vistas/footer");
	}
}
?>
 