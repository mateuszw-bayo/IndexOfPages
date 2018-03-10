<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class str_action extends CI_Controller {


	public function index()
	{

	}





	public function str_wiadomosc()
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		$this->load->model('model_config');
		$this->load->model('models_bibliotek');

		$a = $_POST;

		$temp = $this->models_bibliotek->Add_wiadomosc($a);
		
		if($temp == 1)
		{
			header("Location: /");
		}
		else
		{
			header("Location: /");
		}



	}
}