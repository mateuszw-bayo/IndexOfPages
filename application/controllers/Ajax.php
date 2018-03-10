<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {


	public function index()
	{

	}


	/**
	*	=====================================================
	*		Ajak z wyciagnieciem informacji o produkcie.
	*	=====================================================
	*		@author M.W.
	*		@param VAR < ARRIAR>
	*		@access public
	**/
	public function Produkt($param , $param2 = FALSE)
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		$this->load->model('Prod');

		//echo $param . "<br />" . $param2 . "<br /><br />";

		if(!empty($param2) && is_numeric($param2))
		{
			$item = $this->Prod->prodd($param,$param2);
			$i = TRUE;
			if($param == 1)
			{
				$i = FALSE;
			}
		}
		else
		{
			$item = $this->Prod->prodd(1);
			$i = FALSE;
		}

		$z['ttt'] = $item;
		$this->load->view("body/01_produkty", $z);



		
	}

	/**
	*	=====================================================
	*		Ajak z wyciagnieciem informacji o produkcie.
	*	=====================================================
	*		@author M.W.
	*		@param VAR < ARRIAR>
	*		@access public
	**/
	public function Lista_pro($param = FALSE)
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		$this->load->model('Prod');

		if(is_numeric($param))
		{
			$a['lista'] = $this->Prod->list_p($param);
		}
		else
		{
			$a['lista'] = $this->Prod->list_p(1);
		}
		
		$this->load->view("formularze/5_proedyt_lista", $a);
	}

}