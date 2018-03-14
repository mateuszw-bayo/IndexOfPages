<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Szyfr extends CI_Model
{



	public function pass($param)
	{
		if(!is_array($param))
		{
			$pass = md5($param);
		}
		else
		{
			# code...
		}
		
	}

}