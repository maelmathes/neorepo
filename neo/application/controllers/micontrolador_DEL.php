<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class micontrolador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index1()
	{
		$data=  array (
				'titulo_head'=>'INDEX'
			);
	//	$this->load->view('vista_index');
	}

	public function index()
	{
			// echo " llamando a la funcion noticia";
			$data=  array (
					'titulo_head'=>'NEO COSMO'
					) ;

			$this->load->helper('url');
			$this->load->view('vista_head', $data);
			$this->load->view('vista_noticia');
			$this->load->view('vista_footer');

	}
    
}
