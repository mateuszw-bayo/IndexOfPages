<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class apro extends CI_Controller {


	public function index()
	{
		echo "TEST";
	}

	public function edyt_p($param = FALSE)
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		$this->load->model('model_config');
		$this->load->model('Prod');

		// wyszukanie produktow !
		$item = $this->Prod->prodd(1,1);
		$z['ttt'] = $item;
		$a = $this->load->view("body/01_produkty2", $z , TRUE);


		// configuracja strony...
		$ttt = $this->model_config->cfg_general();

		// sprawdzanie czy jest zalogowany
		if($this->session->userdata('user') && $this->session->userdata('A_range'))
		{
			
			$panel = "panel/ustawienia";
			if($this->session->userdata('A_range') > 0)
			{

				$cb_s = "formularze/4_klijent";

				// configuracja do strony...
				$conf_header = $ttt['header'];
				$conf_header['function_menu'] = $this->load->view("header/01_Conf_header", NULL , TRUE);
				$conf_header['function_baner'] = $this->load->view("header/01_Baner_r", NULL , TRUE);
				$conf_header['panel'] = $this->load->view($panel, NULL , TRUE);
				$conf_body = $ttt['body'];

				$conf_body['section'] = $this->load->view($cb_s,NULL, TRUE);
				
				$conf_body['pro'] = $a;
				$conf_footer = $ttt['footer'];

				$this->load->view("header/conf_header", $conf_header);
				$this->load->view("body/conf_body", $conf_body);
				$this->load->view("footer/conf_footer", $conf_footer);

			}
			else
			{
				
				//$cb_s = "formularze/5_proedyt";


				$this->load->view("body/brak_upraw");
			}
		}
		else
		{
			$this->load->view("body/brak_upraw");

		}
	}


}