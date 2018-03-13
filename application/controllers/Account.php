<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {


	public function index()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('model_config');
	
		$a = "";

		// configuracja strony...
		$ttt = $this->model_config->cfg_general();

		$profil['A'] = "";
		$profil['U'] = "";

		// sprawdzanie czy jest zalogowany
		if($this->session->userdata('user'))
		{

			$profil['U'] = $this->session->userdata('user');
			if($this->session->userdata('A_range'))
			{
				$profil['A'] = $this->session->userdata('A_range');
				
			}

			$panel = "panel/menu";
			if($this->session->userdata('user_Akt') == 1)
			{
				$cb_s = "formularze/4_nowehaslo";
			}
			else
			{
				//$cb_s = "formularze/4_klijent";
				$cb_s = "formularze/5_proedyt";
			}
		}
		else
		{
			$panel = "panel/menu";
			$cb_s = "body/02_start";
			//$cb_s = "formularze/4_rejestracja";
		}
		
		// configuracja do strony...
		$conf_header = $ttt['header'];
		$conf_header['function_menu'] = $this->load->view("header/01_Conf_header", NULL , TRUE);
		$conf_header['function_baner'] = $this->load->view("header/01_Baner_r", NULL , TRUE);
		$conf_header['panel'] = $this->load->view($panel, $profil , TRUE);
		$conf_body = $ttt['body'];

		$conf_body['section'] = $this->load->view($cb_s,NULL, TRUE);
		
		$conf_body['pro'] = $a;
		$conf_footer = $ttt['footer'];

		$this->load->view("header/conf_header", $conf_header);
		$this->load->view("body/conf_body", $conf_body);
		$this->load->view("footer/conf_footer", $conf_footer);

		

	//echo "user - " . $this->session->userdata('user') . "<br /> user_id : " . $this->session->userdata('user_id');

	}




	/**
	*	=================================================================
	*		Tworzenuie konta
	*	=================================================================
	*	@access public
	*	@author Mateusz Wrobel
	*	@link 
	**/
	public function register()
	{

		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('model_config');
	
		// sprawdzanie czy jest zalogowany
		if($this->session->userdata('user'))
		{
			header("Location: /");
			
			
		}
		else
		{
			$a = "";

			// configuracja strony...
			$ttt = $this->model_config->cfg_general();

			$profil['A'] = "";
			$profil['U'] = "";

			$panel = "panel/menu";
			$cb_s = "formularze/4_rejestracja";

			// configuracja do strony...
			$conf_header = $ttt['header'];
			$conf_header['function_menu'] = $this->load->view("header/01_Conf_header", NULL , TRUE);
			$conf_header['function_baner'] = $this->load->view("header/01_Baner_r", NULL , TRUE);
			$conf_header['panel'] = $this->load->view($panel, $profil , TRUE);
			$conf_body = $ttt['body'];

			$conf_body['section'] = $this->load->view($cb_s,NULL, TRUE);
			
			$conf_body['pro'] = $a;
			$conf_footer = $ttt['footer'];

			$this->load->view("header/conf_header", $conf_header);
			$this->load->view("body/conf_body", $conf_body);
			$this->load->view("footer/conf_footer", $conf_footer);
		}

		//echo "user - " . $this->session->userdata('user') . "<br /> user_id : " . $this->session->userdata('user_id');
	}

	/**
	*	=================================================================
	*		Tworzenuie konta
	*	=================================================================
	*	@access public
	*	@author Mateusz Wrobel
	*	@link 
	**/
	public function login()
	{

		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('model_config');
	
		// sprawdzanie czy jest zalogowany
		if($this->session->userdata('user'))
		{
			header("Location: /");
			
		}
		else
		{
			$a = "";

			// configuracja strony...
			$ttt = $this->model_config->cfg_general();

			$profil['A'] = "";
			$profil['U'] = "";

			$panel = "panel/menu";
			$cb_s = "formularze/4_login";

			// configuracja do strony...
			$conf_header = $ttt['header'];
			$conf_header['function_menu'] = $this->load->view("header/01_Conf_header", NULL , TRUE);
			$conf_header['function_baner'] = $this->load->view("header/01_Baner_r", NULL , TRUE);
			$conf_header['panel'] = $this->load->view($panel, $profil , TRUE);
			$conf_body = $ttt['body'];

			$conf_body['section'] = $this->load->view($cb_s,NULL, TRUE);
			
			$conf_body['pro'] = $a;
			$conf_footer = $ttt['footer'];

			$this->load->view("header/conf_header", $conf_header);
			$this->load->view("body/conf_body", $conf_body);
			$this->load->view("footer/conf_footer", $conf_footer);
		}

		//echo "user - " . $this->session->userdata('user') . "<br /> user_id : " . $this->session->userdata('user_id');
	}


}

