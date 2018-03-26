<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
* Rejestracja tworzenie konta na stronie MLR
* Faza poczatkowa
*
* 
* @access public
* @author Mateusz Wrobel <bayomw@gmail.com>
* @license http://www.mlryou.com/lin/gpl.txt
* 
**/
class Filtr extends CI_Model
{


	/**
	*	################################################
	*		Sprawdzanie wprowadzonego e-mail
	*		czy jest poprawnie napisany.
	*	################################################
	*	@author Mateusz Wrobel < bayomw@gmail.com >
	*	@param String
	*	@license MLR
	*	@access public
	*	--------------------
	*	@return
	*	@var BOOT / STRING 
	**/

	public function filtr_email($param)
	{
	if(preg_match('/^[a-zA-Z0-9\.\-\_]+\@[a-zA-Z0-9\.\-\_]+\.[a-z]{2,4}$/D', $param))
		{
			return $param;
		}
		else
		{
			return FALSE;
		}
	}





	/**
	*	==============================================
	*
	*	==============================================
	*
	*	@author Mateusz Wrobel < bayomw@gmail.com >
	*	@access public
	*	@param string(text)
	*	@return
	*	@var BOOT
	**/
	public function filtr_text($param)
	{
		if(preg_match('/^[\d\D\s]{3,}+$/D', $param))
		{
			return htmlspecialchars($param ,ENT_QUOTES);
		}
		else
		{
			return  FALSE;
		}
	}




	/**
	*	==============================================
	*
	*	==============================================
	*
	*	@author Mateusz Wrobel < bayomw@gmail.com >
	*	@access public
	*	@param string(text)
	*	@return
	*	@var BOOT - ARRAY
	**/
	public function filtr_liczba($param)
	{
		if(preg_match('/^[0-9]+$/D', $param))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}



	/**
	*	================================================
	*
	*	================================================
	*	
	*	@author Mateusz Wrobel
	*	@access public
	*	@param string(code)
	*	@return
	*	@var BOOT
	*/
	public function filtr_code($param)
	{
		if(preg_match("/[a-zA-Z0-9]{5,}$/", $param))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}


	/**
	*	================================================
	*
	*	================================================
	*	
	*	@author Mateusz Wrobel
	*	@access public
	*	@param string(code)
	*	@return
	*	@var BOOT
	*/
	public function filtr_www($param)
	{
		if(preg_match('/[a-zA-Z0-9\.\-\_]+\.[a-z]{2,8}$/D', $param))
		{

			return $param;
		}
		else
		{
			return FALSE;
		}
	}






		/**
	*	==============================================
	*
	*	==============================================
	*
	*	@author Mateusz Wrobel < bayomw@gmail.com >
	*	@access public
	*	@param string(text)
	*	@return
	*	@var BOOT
	**/
	public function filtr_color($param)
	{
		if(preg_match('/^\#[a-fA-F0-9]{4,7}+$/D', $param))
		{
			return $param;
		}
		else
		{
			return  FALSE;
		}
	}











	/**
	*	======================================================
	*		wyswietlenie IP usera
	*	======================================================
	*
	*
	**/
	public function filtr_ip()
	{

		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		return $ip;
	}
}

