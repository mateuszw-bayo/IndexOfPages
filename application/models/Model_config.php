<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
* @access public
* @author Mateusz Wrobel <bayomw@gmail.com>
* @license http://www.mlryou.com/lin/gpl.txt
* 
**/
class Model_config extends CI_Model
{

	/**
	*
	*
	*
	*
	*
	**/
	public function cfg_general()
	{
		// elementy odpowiedzialne na stronie
		$teamp['header']['title'] = "M.W. IOP"; // titol
		//$teamp['header']['styl'][] = "/css/style_home.css"; // url do strony
		$teamp['header']['styl'][] = "/css/conf_style.css"; // 
		$teamp['header']['styl'][] = "/css/form2.css"; // 
		$teamp['header']['styl'][] = "/css/style_start.css"; // 
		$teamp['header']['styl'][] = "/css/panel_p.css"; // 
		$teamp['header']['styl'][] = "/css/panel_accesoria.css"; // 
		$teamp['header']['styl'][] = "/css/baner_r.css"; // 

		$teamp['header']['styl'][] = "https://fonts.googleapis.com/css?family=Anton|Bangers|Caveat|Luckiest+Guy|Marck+Script|Open+Sans+Condensed:300|Oxygen"; //

		$teamp['header']['script'][] = "/js/script.js";
		$teamp['header']['script'][] = "/js/ajax_p.js";
		$teamp['header']['script'][] = "http://code.jquery.com/jquery-1.4.2.min.js";
		
		$teamp['header']['script'][] = "/js/baner_r.js";
		$teamp['header']['script'][] = "/js/str.js";
		


		//menu strony
		$teamp['body']['menu'][0]['url'] = "/index.php"; // url
		$teamp['body']['menu'][0]['name'] = "Konto"; // nazwa
		$teamp['body']['menu'][1]['url'] = "/index.php"; 
		$teamp['body']['menu'][1]['name'] = "O mnie"; 
		$teamp['body']['menu'][2]['url'] = "/index.php"; // url
		$teamp['body']['menu'][2]['name'] = "Kontakt"; // nazwa
		

		$teamp['body']['cfg_menu']['start'] = " "; // poczatek menu
		$teamp['body']['cfg_menu']['end'] = " "; // koniec robryki menu



		//footer
		$teamp['footer']['footer_text'] = "&copy Wpisane z pliku config"; // 


		return $teamp;
	}

	/**
	*	======================================================================
	*		id 			INT
	*		typ_n 		INT 	-1 header title		-4 body menu
	*							-2 header styl		-5 body cfg_menu
	*							-3 header script	-6 footer footer_text
	*		typ_t 		VAR 
	*		akcia		VAR 
	*		opis 		VAR 
	*		tresc 		TEXT 
	*	======================================================================
	*
	**/
	public function cfg_connect()
	{
		$sql = "SELECT * FROM `str_conf` ";
		


		switch ($param['typ_n'])
		{
			case '1':
					$param['opis'];
				
				$teamp['header']['title'] = "";
				break;
			case '2':
					$param['opis'];
				
				$teamp['header']['styl'][] = "";
				break;
			case '3':
					$param['opis'];
				
				$teamp['header']['script'][] = "";
				break;
			case '4':
					$param['opis'];
					$param['typ_t'];
					$param['akcia'];

				
				if(!empty($teamp['body']['menu'][0]['url']))
				{
					$i = count($teamp['body']['menu']);
				}
				else
				{
					$i = 0;
				}
				$teamp['body']['menu'][$i]['url'] = "";
				$teamp['body']['menu'][$i]['name'] = "";
				break;
			case '5':
					$param['opis'];
					$param['typ_t'];

				$teamp['body']['cfg_menu'][] = "";
				break;
			case '6':
					$param['text'];
				
				$teamp['footer']['footer_text'] = "";
				break;
			
			default:
				# code...
				break;
		}




	}

}