<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

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
	

	public function index()
	{
			// echo " llamando a la funcion noticia";
			$data=  array (
					'titulo_head'=>'NEO COSMO', 
                    'seccion'=>'Index'
					) ;

			$this->load->helper('url');
			//$this->load->database();
			$this->load->view('vista_head', $data);
			$this->load->view('vista_noticia');
			$this->load->view('vista_footer');

	}
    public function Nosotros()
	{
			// echo " llamando a la funcion noticia";
			$data=  array (
					'titulo_head'=>'NEO COSMO', 
                    'seccion'=>'Nosotros'
					) ;

			$this->load->helper('url');
			//$this->load->database();
			$this->load->view('vista_head', $data);
			$this->load->view('vista_nosotros');
			$this->load->view('vista_footer');

	}
    public function Servicios()
	{
			// echo " llamando a la funcion noticia";
			$data=  array (
					'titulo_head'=>'NEO COSMO', 
                    'seccion'=>'Servicios'
					) ;

			$this->load->helper('url');
			//$this->load->database();
			$this->load->view('vista_head', $data);
			$this->load->view('vista_noticia');
			$this->load->view('vista_footer');

	}
    
    public function Portafolio()
	{
			// echo " llamando a la funcion noticia";
			$data=  array (
					'titulo_head'=>'NEO COSMO', 
                    'seccion'=>'Portafolio'
					) ;

			$this->load->helper('url');
			//$this->load->database();
			$this->load->view('vista_head', $data);
			$this->load->view('vista_noticia');
			$this->load->view('vista_footer');

	}
    public function Contacto()
	{
			// echo " llamando a la funcion noticia";
			$data=  array (
					'titulo_head'=>'NEO COSMO', 
                    'seccion'=>'Contacto'
					) ;

			$this->load->helper('url');
			//$this->load->database();
			$this->load->view('vista_head', $data);
			$this->load->view('vista_noticia');
			$this->load->view('vista_footer');

	}
}
