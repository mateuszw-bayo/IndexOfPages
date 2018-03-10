<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edytorp extends CI_Controller {


	public function index()
	{

	}



	public function prod($param = false,$param2 = false)
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		$this->load->model('Prod');

		$aa = 1;
		if(!empty($param) && !empty($param2))
		{
			if(is_numeric($param) && is_numeric($param2))
			{
				$aa = 0;

				$ttt = $this->Prod->seep($param,$param2);

			}
		}
		else if(!empty($param))
		{
			if(is_numeric($param))
			{
				$aa = 0;

			}
		}
		
		var_dump($ttt);
		
		if($aa)
		{

		}

		$temp['a'] = 2;
		$temp['nazwa'] = "TEST";
		$temp['opis'] = "Opis";
		$temp['img'] = "fotka";

 

		$this->load->view("formularze/5_produkty",$temp);

		$katalog_serwer=str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['SCRIPT_FILENAME']);
		echo $katalog_serwer;
		$dir = $katalog_serwer . '/img/produkty';
		
		if ($dir = opendir($dir))
		{
			while ($file = readdir($dir))
			{
				
				if ($file != '.' && $file != '..')
				{
					echo "<img src='/img/produkty/";
					echo $file;
					echo "'/><br />";
					
				}
			}
		   closedir($dir);
		}



	}



}