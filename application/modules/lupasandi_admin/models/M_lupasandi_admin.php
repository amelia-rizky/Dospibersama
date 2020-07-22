<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lupasandi_admin extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}
}



