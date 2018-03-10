<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_zap extends CI_Controller {


	public function index()
	{
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('filtr');
		$this->load->helper('cookie');
		$this->load->model('Prod');

		//$sql = "SELECT * FROM `p_nazwa_p` INNER JOIN `p_nazwa_k` ON p_nazwa_p.id_k = p_nazwa_k.id_k";


		$a = $this->Prod->prodd(3,1);

		var_dump($a);

		$a = $this->Prod->prodd(2,2);

		var_dump($a);

		$a = $this->Prod->prodd(1,1);

		var_dump($a);

/*
		$sql = "SELECT * FROM `Produkt` LEFT JOIN `P_nazwa_P` ON Produkt.id_P = P_nazwa_P.id_p LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K";

		$var_odp = $this->db->query($sql);

		echo "<Br /><Br /><Br />Cala baza<table>";
		foreach ($var_odp->result_array() as $row)
				{
					echo "<tr>";
					foreach ($row as $key => $value) 
					{
						if($key == "Cena_pro")
						{
							$a = $value / 100;
							$value = $a . "zł";
						}
						echo "<td><b>" . $key . "</b> = <u>" . $value . "</u></td>";
					}
					echo "</tr>";
				}
		echo "</table><Br /><Br /><Br />";




		$sql = "SELECT * FROM  `P_nazwa_P` LEFT JOIN `P_nazwa_K` ON P_nazwa_P.id_K = P_nazwa_K.id_K";

		$var_odp = $this->db->query($sql);

		echo "<Br /><Br /><Br />2 Kategoria <table>";
		foreach ($var_odp->result_array() as $row)
				{
					echo "<tr>";
					foreach ($row as $key => $value) 
					{
						echo "<td><b>" . $key . "</b> = <u>" . $value . "</u></td>";
					}
					echo "</tr>";
				}
		echo "</table><Br /><Br /><Br />";




		$sql = "SELECT * FROM `P_nazwa_K`";

		$var_odp = $this->db->query($sql);

		echo "<Br /><Br /><Br />1 Kategoria <table>";
		foreach ($var_odp->result_array() as $row)
				{
					echo "<tr>";
					foreach ($row as $key => $value) 
					{
						echo "<td><b>" . $key . "</b> = <u>" . $value . "</u></td>";
					}
					echo "</tr>";
				}
		echo "</table><Br /><Br /><Br />";





echo "----------------------------------------------Odzielne----------------------------------------------";





$sql = "SELECT * FROM `P_nazwa_K`";

		$var_odp = $this->db->query($sql);

		echo "<Br /><Br /><Br />P_nazwa_K<table>";
		foreach ($var_odp->result_array() as $row)
				{
					echo "<tr>";
					foreach ($row as $key => $value) 
					{
						echo "<td><b>" . $key . "</b> = <u>" . $value . "</u></td>";
					}
					echo "</tr>";
				}
		echo "</table><Br />";


$sql = "SELECT * FROM `P_nazwa_P`";

		$var_odp = $this->db->query($sql);

		echo "<Br />P_nazwa_P<table>";
		foreach ($var_odp->result_array() as $row)
				{
					echo "<tr>";
					foreach ($row as $key => $value) 
					{
						echo "<td><b>" . $key . "</b> = <u>" . $value . "</u></td>";
					}
					echo "</tr>";
				}
		echo "</table><Br />";


$sql = "SELECT * FROM `Produkt`";

		$var_odp = $this->db->query($sql);

		echo "<Br />Produkt<table>";
		foreach ($var_odp->result_array() as $row)
				{
					echo "<tr>";
					foreach ($row as $key => $value) 
					{
						echo "<td><b>" . $key . "</b> = <u>" . $value . "</u></td>";
					}
					echo "</tr>";
				}
		echo "</table><Br /><Br />";
*/










		echo "Dziala plik";
	}

}