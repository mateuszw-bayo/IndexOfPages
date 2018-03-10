<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class m_chat extends CI_Model
{

	/*
	*	id 			int
	*	user_wy  	int
	*	user_od 	int
	*	contents 	text
	*	date 		datetime
	*	open 		int
	*/

	/*


	CREATE TABLE `mlr_chat` (
      `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
      `user_wy` int(11) NOT NULL default '0',
      `user_od` int(11) NOT NULL default '0',
      `contents` TEXT  CHARACTER SET utf16 COLLATE utf16_polish_ci NULL DEFAULT NULL,
      `date` DATETIME NOT NULL,
      `open` int(11) NOT NULL default '0',
      PRIMARY KEY (`id`)
  )
  ENGINE=MyISAM DEFAULT CHARACTER SET latin1
    COLLATE latin1_general_cs AUTO_INCREMENT=0;


    */

	public function meSeeChat($id , $id2, $sid = FALSE)
	{

		$query = "SELECT * FROM `mlr_chat` WHERE";

		if($sid != FALSE && is_numeric($sid))
		{
			$query .= "(`user_wy` = $id AND `user_od` = $id2 OR `user_wy` = $id2 AND `user_od` = $id) AND id > $sid ORDER BY id DESC LIMIT 20";
		}
		else
		{
			$query .= "`user_wy` = $id AND `user_od` = $id2 OR `user_wy` = $id2 AND `user_od` = $id ORDER BY id DESC LIMIT 20";
		}

		$q = $this->db->query($query);

		if($q->num_rows())
		{
			foreach ($q->result() as $row)
			{
				$info[] = $row;
			}
			return $info;
		}
		else
		{
			return FALSE;
		}
	}


	/**
	*	===================================================
	*
	*	===================================================
	*
	*
	*
	**/

	public function rozkChat($param)
	{

		$id = $param['id'];
		$id2 = $param['id2'];
		$text = $param['text'];

		if(is_numeric($id) && is_numeric($id2) && !empty($text))
		{
			$query = "INSERT INTO `mlr_chat` (`id`, `user_wy`, `user_od`, `contents`, `date`, `open`) VALUES (NULL, $id, $id2, '$text', NOW(), '0');";
			$this->db->query($query);
			return TRUE;
		}
		else
			return FALSE;
	}

	/**
	*	===================================================
	*
	*	===================================================
	*
	*
	*
	**/


	public function chreatorChat($param , $id_me )
	{

		$text_teamp = "";
		ksort($param);

		foreach ($param as $key => $value) 
		{
			
			if($id_me == $value['id'])
			{
				$tt = "me";
			}
			else 
			{
				$tt = "you";
			}
			$tt2 = $value['text'];

			$text_teamp .= "<div class='" . $tt . "'>" . $tt2 . " </div>";
		}

		return $text_teamp;

	}

	/**
	*	===================================================
	*
	*	===================================================
	*
	*
	*
	**/

	public function select_chat($param = FALSE)
	{
		if($param)
		{

			foreach ($param as $key => $value) 
			{	
				$p[$value->id]['id'] = $value->user_wy;
				$p[$value->id]['text'] = $value->contents;
			}
			return $p;
		}
		else
		{
			return FALSE;
		}
	}

 
  







}