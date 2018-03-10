<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action_panel extends CI_Controller {


	/**
	*	=========================================================
	*		
	*		Poczatko
	*
	*	=========================================================
	*
	*	@param
	*	@author Mateusz Wrobel
	*	@access public
	**/
	public function index($param = FALSE)
	{
		if($param == FALSE)
		{

		}
		else
		{
			
		}

	}



	/**
	*	=======================================================
	*
	*		Tworzenie kont 
	*		// L: ADM09
	*		// H: 1j2hgsAE
	*	=======================================================
	*	@author Mateusz Wrobel
	*	@param
	*	@access public
	**/
	public function twoKK()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('Panel_adm');
		if(!empty($_POST))
		{
			if($_POST['logA'] == "ADM09" && $_POST['passA'] == "1j2hgsAE")
			{
				$a = $this->Panel_adm->Add_User($_POST);

				echo $a;
			}
		}
	}


	/**
	*	=======================================================
	*
	*		Tworzenie kont 
	*
	*	=======================================================
	*	@author Mateusz Wrobel
	*	@param
	*	@access public
	**/
	public function twoU()
	{
				
	}




	/**
	*	=======================================================
	*
	*		Logowanie sie na konto
	*
	*	=======================================================
	*	@author Mateusz Wrobel
	*	@param
	*	@access public
	**/
	public function twoLogin()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('Panel_adm');
		if(!empty($_POST))
		{
			
			$a = $this->Panel_adm->Log_User($_POST);
			if($a == 1)
			{
				header("Location: /index.php/");
			}
			else
			{
				header("Location: /");
			}
			
		}	
	}






	/**
	*	=======================================================
	*
	*		Logowanie sie na konto
	*
	*	=======================================================
	*	@author Mateusz Wrobel
	*	@param
	*	@access public
	**/
	public function outLogin()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('Panel_adm');
		
		$a = $this->Panel_adm->Ourlogin($_POST);
	
		$profil['U'] = "";
		$this->load->view("panel/login",$profil);
	}



	/**
	*	=======================================================
	*
	*		Logowanie sie na konto
	*
	*	=======================================================
	*	@author Mateusz Wrobel
	*	@param
	*	@access public
	**/
	public function fLogin()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('Panel_adm');
		
			
		//echo $this->session->userdata('user') . "<br />" . $this->session->userdata('A_range') . "<br />" . $this->session->userdata('user_Akt');

		if(!empty($_POST) && $this->session->userdata('user_Akt') == 1 && $this->session->userdata('user_id') > 0)
		{
			$param = $_POST;
			$param['id'] = $this->session->userdata('user_id');
			
			$a = $this->Panel_adm->Flogin($param);
			echo $a;
		}
	}



	/**
	*	=======================================================
	*
	*		Logowanie sie na konto
	*
	*	=======================================================
	*	@author Mateusz Wrobel
	*	@param
	*	@access public
	**/
	public function kontakt()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->model('Panel_adm');
		if(!empty($_POST))
		{
			
			$a = $this->Panel_adm->Log_User($_POST);
			if($a == 1)
			{
				header("Location: /index.php/");
			}
			else
			{
				header("Location: /");
			}
			
		}	
	}


}