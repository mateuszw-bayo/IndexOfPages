<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index($param = FALSE, $param2 = FALSE)
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
	

	

		// sprawdzanie czy jest zalogowany
		if($this->session->userdata('user'))
		{
			if($this->session->userdata('A_range'))
			{

				$this->load->model('model_config');
				$this->load->model('M_admin');

				
				// configuracja strony...
				$ttt = $this->model_config->cfg_general();
				$ttt['header']['styl'][] = "/css/admin.css"; // 
				$profil['A'] = "";
				$profil['U'] = "";
				

				// wyszukanie produktow !
				$item ="";
				$z['ttt'] = $item;
				



				$profil['A'] = $this->session->userdata('A_range');
				$profil['U'] = $this->session->userdata('user');





				if($this->session->userdata('user_Akt') == 1)
				{
					header("Location: /");
				}


				if(!empty($param))
				{
					$panel = "panel/menu";
					$cb_s = "admin/A00_Menu";
					
					if($param == "user")
					{
						if(is_numeric($param2))
						{
							$s['var_arr'] = $this->M_admin->SELECT_user($param2);
							$s['next'] = $param2;
						}
						else
						{
							$s['var_arr'] = $this->M_admin->SELECT_user(1);
							$s['next'] = 1;
						}
						
						$a = $this->load->view("admin/A01_User", $s , TRUE);
						
						//var_dump($s);
					}
					else if($param == "conf")
					{
						$a = $this->load->view("admin/A02_Conf", $ttt , TRUE);
					}
					else if ($param == "mess")
					{
						$a = "";
					}
					else
					{
						$a = "";
					}
				}
				else
				{	
					$panel = "panel/menu";
					$cb_s = "admin/A00_Menu";
					$a = "";

				}



				//$cb_s = "formularze/4_klijent";
				


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
			else
			{

				header("Location: /");




			}

			
			
		}
		else
		{
			header("Location: /");
		}

		
	}


}

