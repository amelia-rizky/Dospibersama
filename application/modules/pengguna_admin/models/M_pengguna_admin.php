<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna_admin extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_hewan')->result();
		
	}

	//start function syarat_ketentuan_penjual*/
}