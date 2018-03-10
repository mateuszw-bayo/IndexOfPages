<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Prod extends CI_Model
{

	/**
	*	============================================================
	*		
	*	============================================================
	*
	*	@param param = Zmiena odpowiedzialna za dziedzine
	*	@param param2 = ID ktore chcemy sie dowiedziec.
	*
	**/
	public function prodd($param,$param2 = FALSE)
	{


		if(!empty($param2) && is_numeric($param2))
		{
			if(is_numeric($param2))
			{
				$id = $param2;
			}

			switch ($param)
			{
				case '1':
					# code... KATEGORIA
					$sql = "SELECT * FROM `P_nazwa_K`";
					break;
				case '2':
					# wszyskie z danej kategori....
					$sql = "SELECT * FROM  `P_nazwa_P` LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K WHERE P_nazwa_P.id_K = $id";
					break;
				case '3':
					# code...
					$sql = "SELECT * FROM `Produkt` LEFT JOIN `P_nazwa_P` ON Produkt.id_P = P_nazwa_P.id_P LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K WHERE Produkt.id_P = $id";
					break;
				case '4':
					# wylacznie dane 1 produktu
					$sql = "SELECT * FROM `Produkt` LEFT JOIN `P_nazwa_P` ON Produkt.id_P = P_nazwa_P.id_P LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K WHERE Produkt.id_pro = $id";
					break;
				case '5':
					# wylacznie dane 1 produktu
					$sql = "SELECT * FROM `Produkt` LEFT JOIN `P_nazwa_P` ON Produkt.id_P = P_nazwa_P.id_P LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K ";
					break;
				default:
					$sql = "SELECT * FROM `P_nazwa_K`";
					break;
			}
		} 
		else
		{
			$sql = "SELECT * FROM `P_nazwa_K`";
		}

		// zapytanie do bazy danych........................
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




		$prod = $temp;

		$a = count($prod);

		for ($i=0; $i < $a; $i++) 
		{ 

			$aK = 0;
			$aP = 0;
			$aPR = 0;

	
			// ID numer;
			if(!empty($prod[$i]["id_K"]))
			{
				$aK = $prod[$i]["id_K"];
				//$ttt[$aK]
			}
			if(!empty($prod[$i]["id_P"]))
			{
				$aP = $prod[$i]["id_P"];
				//$ttt[$aK][$aP]
			}
			if(!empty($prod[$i]["id_pro"]))
			{
				$aPR = $prod[$i]["id_pro"];
				//$ttt[$aK][$aP][$aPR]
			}
			
			// Cena 
			if(!empty($prod[$i]["Cena_pro"]))
			{
				$c = $prod[$i]["Cena_pro"] / 100;
				$ttt[$aK][$aP][$aPR]['Cena'] = $c . "zł.";
			}

			// Nazwa Produktu
			if(!empty($prod[$i]["Nazwa_pro"]))
			{
				$ttt[$aK][$aP][$aPR]['nazwa'] = $prod[$i]["Nazwa_pro"];
			}
			if(!empty($prod[$i]["Nazwa_p"]))
			{
				$ttt[$aK][$aP]['nazwa'] = $prod[$i]["Nazwa_p"];
			}
			if(!empty($prod[$i]["Nazwa_k"]))
			{
				$ttt[$aK]['nazwa'] = $prod[$i]["Nazwa_k"];
			}

			// TYP produktu --------
			if(!empty($prod[$i]["typ_p"]))
			{
				$ttt[$aK][$aP]['typ'] = $prod[$i]["typ_p"];
			}
			if(!empty($prod[$i]["typ_k"]))
			{
				$ttt[$aK]['typ'] = $prod[$i]["typ_k"];
			}
			// opis ----------
			if(!empty($prod[$i]["opis_pro"]))
			{
				$ttt[$aK][$aP][$aPR]['opis'] = $prod[$i]["opis_pro"];
			}
			if(!empty($prod[$i]["opis_p"]))
			{
				$ttt[$aK][$aP]['opis'] = $prod[$i]["opis_p"];
			}
			if(!empty($prod[$i]["opis_k"]))
			{
				$ttt[$aK]['opis'] = $prod[$i]["opis_k"];
			}

			// zdjecie --------
			if(!empty($prod[$i]["IMG_P"]))
			{
				
				$ttt[$aK][$aP]['IMG'] = $prod[$i]["IMG_P"];
			}
			if(!empty($prod[$i]["IMG_K"]))
			{
				
				$ttt[$aK]['IMG'] = $prod[$i]["IMG_K"];
			}
		}

		// zakonczenie calej funkcji.........................
		return $ttt;
	}


	/**
	*	======================================================================
	*
	*	======================================================================
	*
	*
	**/

	public function seep($param,$param2 = FALSE)
	{


		if(!empty($param2) && is_numeric($param2))
		{
			if(is_numeric($param2))
			{
				$id = $param2;
			}

			switch ($param)
			{
				case '1':
					# code... KATEGORIA
					$sql = "SELECT * FROM `P_nazwa_K` WHERE `id_K` = $id";
					break;
				case '2':
					# wszyskie z danej Podkategorie
					$sql = "SELECT * FROM  `P_nazwa_P` LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K WHERE P_nazwa_P.id_P = $id";
					break;
				case '3':
					# c
					$sql = "SELECT * FROM `Produkt` LEFT JOIN `P_nazwa_P` ON Produkt.id_P = P_nazwa_P.id_P LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K WHERE Produkt.id_pro = $id";
					break;
				case '4':
					# wylacznie dane 1 produktu
					$sql = "SELECT * FROM `P_nazwa_K`";
					break;
				case '5':
					# wylacznie dane 1 produktu
					$sql = "SELECT P_nazwa_P.id_P, 
					P_nazwa_P.Nazwa_p,
					P_nazwa_P.IMG_P,
					P_nazwa_P.opis_p,
					P_nazwa_K.Nazwa_k, 
					P_nazwa_K.id_K  FROM  `P_nazwa_P` LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K";
					break;
				case '6':
					# wylacznie dane 1 produktu
					$sql = "SELECT Produkt.Nazwa_pro, 
					Produkt.id_pro, 
					Produkt.opis_pro, 
					Produkt.Cena_pro, 
					P_nazwa_P.id_P, 
					P_nazwa_P.Nazwa_p, 
					P_nazwa_K.Nazwa_k, 
					P_nazwa_K.id_K 
					FROM `Produkt` LEFT JOIN `P_nazwa_P` ON Produkt.id_P = P_nazwa_P.id_P LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K";
					break;
				
				default:
					$sql = "SELECT * FROM `P_nazwa_K`";
					break;
			}
		} 
		else
		{
			$sql = "SELECT * FROM `P_nazwa_K`";
		}

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

		return $temp;
	}


	/**
	*	===========================================================================
	*		
	*	===========================================================================
	*
	*
	**/
	public function list_p($param = FALSE)
	{
		if(!is_numeric($param) || $param == FALSE)
		{
			$sql = "SELECT * FROM `P_nazwa_K`";
		}
		else
		{
			if($param == 1)
			{
				// katalog
				$sql = "SELECT * FROM `P_nazwa_K`";
				$temp['tt'] = 1;
			}
			else if($param == 2)
			{
				// pod katalog
				$sql = "SELECT * FROM `P_nazwa_P`";
				$temp['tt'] = 2;
			}
			else if($param == 3)
			{
				// produkt
				$sql = "SELECT * FROM `Produkt`";
				$temp['tt'] = 3;
			}
			else
			{
				$sql = "SELECT * FROM `P_nazwa_K`";
				$temp['tt'] = 1;
			}
		}


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
		
		return $temp;
	}


}