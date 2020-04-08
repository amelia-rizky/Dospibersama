<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_syarat_ketentuan_penjual extends CI_Model {

	function tampil()
	{
		return $this->db->get('tata_cara')->result();
	}

}