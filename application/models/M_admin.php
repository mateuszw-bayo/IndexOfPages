<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
* @access public
* @author Mateusz Wrobel <bayomw@gmail.com>
* @license http://www.mlryou.com/lin/gpl.txt
* 
**/
class M_admin extends CI_Model
{

	/**
	*
	*
	*
	*
	*
	**/
	public function SELECT_user($param = FALSE)
	{
		if(!empty($param))
		{
			if (is_numeric($param))
			{
				
				$sql2 = "SELECT COUNT(id_u) FROM `user`";
				$qq = $this->db->query($sql2);
				$qq2 = $qq->result_array();
				$temp['ilo'] = $qq2[0]['COUNT(id_u)'];

				$l = ($param * 10) - 10;
				

				if($l <= 0 && $l < $qq2[0]['COUNT(id_u)'])
				{
					$sql = "SELECT user.id_u, user.Login, user.Akt, user_dmin.Ranga FROM `user` LEFT JOIN `user_dmin` ON user.id_u = user_dmin.id_u LIMIT 10 ";
				}
				else
				{
					$sql = "SELECT user.id_u, user.Login, user.Akt, user_dmin.Ranga  FROM `user` LEFT JOIN `user_dmin` ON user.id_u = user_dmin.id_u LIMIT 10 , $l";
				}
			}
			

		}

		if(empty($sql))
		{

			$sql2 = "SELECT COUNT(id_u) FROM `user`";
			$qq = $this->db->query($sql2);
			$qq2 = $qq->result_array();
			$temp['ilo'] = $qq2[0]['COUNT(id_u)'];


			$sql = "SELECT user.id_u, user.Login, user.Akt, user_dmin.Ranga  FROM `user` LEFT JOIN `user_dmin` ON user.id_u = user_dmin.id_u LIMIT 10 ";
		}
		

		$q = $this->db->query($sql);
		$o = 0;
		foreach ($q->result_array() as $row)
		{
			foreach ($row as $key => $value) 
			{
				$temp[$o][$key] = $value;
			}
			$o++;
		}
		return $temp;


	}



	/**
	*
	*
	*
	**/
	public function New_pass($param = FALSE)
	{

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
	public function New_conf($param = FALSE)
	{

		if(is_array($param))
		{
			$error = 0;
			switch ($param['typ_n'])
			{
				//****************************************************************************
				case '1':
					$typN = 1;
					$typT = "";
					$akcia = "";

					if(!empty($param['opis']))
					{
						$opis = $param['opis'];
					}
					else
					{
						$error = 1;
					}

					$tresc = "";

					break;
				//****************************************************************************
				case '2':
					$typN = 2;
					$typT = "";
					$akcia = "";

					if(!empty($param['opis']))
					{
						$opis = $param['opis'];
					}
					else
					{
						$error = 1;
					}

					$tresc = "";
					break;
				//****************************************************************************	
				case '3':
				
					$typN = 3;
					$typT = "";
					$akcia = "";

					if(!empty($param['opis']))
					{
						$opis = $param['opis'];
					}
					else
					{
						$error = 1;
					}

					$tresc = "";
					break;
				//****************************************************************************
				case '4':
					$typN = 4;	

					if(!empty($param['opis']) && !empty($param['typT']) && !empty($param['akcia']))
					{
						$opis = $param['opis'];
						$typT = $param['typT'];
						$akcia = $param['akcia'];
					}
					else
					{
						$error = 1;
					}

					$tresc = "";
					break;
				//****************************************************************************
				case '5':
					$typN = 5;
					$typT = "";
					$akcia = "";

					if(!empty($param['opis']))
					{
						$opis = $param['opis'];
					}
					else
					{
						$error = 1;
					}

					$tresc = "";
					break;
				//****************************************************************************
				case '6':
					$typN = 6;
					$typT = "";
					$akcia = "";
					$opis = "";

					if(!empty($param['tresc']))
					{
						$tresc = $param['tresc'];
					}
					else
					{
						$error = 1;
					}

					
					break;
				//****************************************************************************
				default:
					$error = 1;
					break;
			}

			if($error == 0)
			{
				$sql = "INSERT INTO `str_conf`(`id`, `typ_n`, `typ_t`, `akcia`, `opis`, `tresc`) 
				VALUES (NULL,'$typN','$typT','$akcia','$opis','$tresc')";

				$q = $this->db->query($sql);
				
			}
		}
		else
		{
			return FALSE;
		}


	}

}