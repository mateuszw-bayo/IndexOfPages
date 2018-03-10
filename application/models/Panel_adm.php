<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Panel_adm extends CI_Model
{


	/**
	*	======================================================
	*		tworzenie konta user
	*	======================================================
	*	@access public
	*	@param
	*	@var
	**/
	public function Add_User($param)
	{
		if(is_array($param))
		{
			$log = $param['logU'];

			$sql = "SELECT `id_u` FROM `User` WHERE `Login` = '$log'";
			$q2 = $this->db->query($sql);
			$qq = $q2->result_array();
			if(is_array($qq) && !empty($qq[0]['id_u']))
			{
				$id = $qq[0]['id_u'];
			}
			else
			{
				$id = "";
			}

			if($param['passU'] == $param['passU2'] && empty($id))
			{

				
				$pass = md5($param['passU']);
				$akt = $param['ResP'];

				$sql = "INSERT INTO `User`(`id_u`, `Login`, `Password`, `Akt`) VALUES (NULL,'$log','$pass',$akt)";

				$q = $this->db->query($sql);

				$info = "Konto : '$log' Utworzone";
				if($param['uST1'])
				{
					$sql = "SELECT `id_u` FROM `User` WHERE `Login` = '$log'";
					$q2 = $this->db->query($sql);

					$qq = $q2->result_array();


					$id = $qq[0]['id_u'];
					$rr = $param['uST2'];

					$sql = "INSERT INTO `User_dmin`(`id`, `id_u`, `Ranga`) VALUES (NULL,'$id','$rr')";
					$q = $this->db->query($sql);
					$info .= "<br /> Nadane Uprawnienia Admina.";

				}
			}
			else if(!empty($id))
			{
				$info = "Login juz istnieje";
			}
			else
			{
				$info = "Popraw Hasło";
			}
			return $info;
		}
		else
		{
			return FALSE;
		}
	}


	/**
	*	======================================================
	*		Logowanie sie na konto user
	*	======================================================
	*	@access public
	*	@var 
	*	@param 
	**/
	public function Log_User($param = FALSE)
	{
		if(is_array($param))
		{
			$log = $param['logU'];
			$pass = md5($param['passU']);
			$sql = "SELECT `id_u`, `Akt` FROM `User` WHERE `Login` = '$log' AND `Password` = '$pass'";
			$q2 = $this->db->query($sql);
			$qq = $q2->result_array();
			if(is_array($qq) && !empty($qq[0]['id_u']))
			{
				$id = $qq[0]['id_u'];
				$Akt = $qq[0]['Akt'];

				$sql = "SELECT `Ranga` FROM `User_dmin` WHERE `id_u` = '$id'";
				$q1 = $this->db->query($sql);
				$q = $q1->result_array();
				if(is_array($q) && !empty($q[0]['Ranga']))
				{
					$Ranga = $q[0]['Ranga'];
					$_array_session['A_range'] = $Ranga;
				}

				if($Akt)
				{
					$_array_session['user_Akt'] = $Akt;
				}

				$_array_session['user'] = TRUE;
				$_array_session['user_id'] = $id;
				$this->session->set_userdata($_array_session);
				$info = 2;

			}
			else
			{
				$info = 1;
			}
		}
		else
		{
			$info = 1;
		}

		return $info;

	}





	/**
	*	==========================================================
	*		Wylogowywanie sie z konta.
	*	==========================================================
	*
	*	@param VAR BOOT
	*	@access public
	**/
	public function Ourlogin()
	{
		$this->session->sess_destroy();
		
		return TRUE;
	}



	/**
	*	==========================================================
	*		--
	*	==========================================================
	*
	*	@param VAR BOOT
	*	@access public
	**/
	public function Flogin($param)
	{
		
		if($param['passU'] == $param['passU2'])
		{

			$pass = md5($param['passU']);
		
			//echo $pass;

			$id = $param['id'];
			$sql = "UPDATE `User` SET `Akt` = '0', `Password` = '$pass' WHERE `id_u` = '$id'";
			$q = $this->db->query($sql);
			$_array_session['A_range'] = 0;
			$this->session->set_userdata($_array_session);

			//return "Hasło zostalo zmienione";
			header("Location : /");
		}
		else
		{
			return "ERROR";
		}

	}



	
}