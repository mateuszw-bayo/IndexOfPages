<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_ajax extends CI_Controller {


	public function index()
	{

	}


	/**
	*	========================================================
	*		Strony bez kontaktu z baza danych.
	*	========================================================
	*		@author Mateusz Wrobel
	*		@access public
	**/
	public function pf($param)
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		//$this->load->model('user');

		$profil['A'] = "";
		$profil['U'] = "";

		if($this->session->userdata('A_range') && $this->session->userdata('user'))
		{
			$profil['A'] = $this->session->userdata('A_range');
			$profil['U'] = $this->session->userdata('user');
		}
		else if($this->session->userdata('user'))
		{
			$profil['U'] = $this->session->userdata('user');
		}


		if($param == "P_login")
		{
			$this->load->view("panel/login", $profil);
		}
		else if ($param == "P_ust") {
			$this->load->view("panel/ustawienia", $profil);
		}
		else if($param == "kontakt")
		{
			$this->load->view("panel/kontakt", $profil);
		}
		else if ($param == "start") {
			$this->load->view("panel/menu", $profil);
		}
		else
		{
			echo "Strona nie istnieje!";
		}
		


	}


}
