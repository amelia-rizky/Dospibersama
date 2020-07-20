<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login_admin extends CI_Model {

	function tampil()
	{
		return $this->db->get('user')->result();
	}

/*start function register_pemilik*/

	function login_admin(){
		$email							= $this->input->post('email');
		$password						= $this->input->post('password');
		
		$status=1;
		$user = array( "email"     			=>$email,
					   "password" 			=>$password,
				);

		$this->db->set('status',$status);
		$this->db->insert('user',$user);	
	}

	/*end start function register_pemilik*/

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}


