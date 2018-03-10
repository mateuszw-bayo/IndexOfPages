<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * ==============================================================================
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		
	 *	- or -
	 * 		http
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * =============================================================================
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 * @param var 
	 * @var 
	 * @author Mateusz Wroble
	 * @access private
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
