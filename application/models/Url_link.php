<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Url_link extends CI_Model
{

	/**
	*	================================================================
	*
	*		-- Dodawanie url na stronie ...
	*
	*	================================================================
	*
	**/
	public function Add_url($param)
	{

		$name = $param['name']; // string
		$url = $param['www']; // string
		$page = ""; // string
		$color = $param['color']; // string 
		$icone = ""; // string
		$id_user = $this->session->userdata('user_id'); // INT
		$apl = "0"; // INT
		$age = "0"; // INT

		$ip = $this->filtr->filtr_ip(); // string

		$sql = "INSERT INTO `url_link`(`id`, `open`, `name`, `url`, `page`, `color`, `icone`, `id_user`, `apl`, `age`, `ip`) VALUES (NULL,'0','$name','$url','$page','$color','$icone','$id_user','$apl','$age','$ip')";

		echo "<br />" . $sql;

		$this->db->query($sql);

	}

	/**
	*	================================================================
	*
	*		-- Dodawanie url na stronie ...
	*
	*	================================================================
	*	@author Mateusz Wróbel
	*	@param Array
	*	@access public
	**/
	public function Select_url($param = FALSE)
	{
		$id = $this->session->userdata('user_id');
		$sql = "SELECT `id`,`open`,`name`,`url`,`color` FROM `url_link` WHERE `id_user` = $id";
		

		if(!empty($sql))
		{
			$var_odp = $this->db->query($sql);
			$o = 0;
			foreach ($var_odp->result_array() as $row)
			{
				foreach ($row as $key => $value) 
				{
					$temp[$o][$key] = $value;
				}
				$o++;
			}
		}
		else
		{
			return FALSE;
		}

		if($o)
		{
			return $temp;
		}
		else
		{
			return FALSE;
		}


	}



}