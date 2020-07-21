<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_admin extends CI_Model {

	function tampil()
	{
		return $this->db->get('tata_cara')->result();
	}

	//start function syarat_ketentuan_penjual*/
}