<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pengguna_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pengguna_admin",
			'namafileview' 	=> "V_pengguna_admin",
			'tampil'		=> $this->m_pengguna_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function pengguna_admin(){
		$this->m_pengguna_admin->pengguna_admin();
	}
	
}
?>
 