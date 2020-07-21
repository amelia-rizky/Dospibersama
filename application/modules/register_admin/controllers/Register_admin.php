<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_register_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "register_admin",
			'namafileview' 	=> "V_register_admin",
			'tampil'		=> $this->m_register_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_login_admin', $data);
	}

	function register_admin(){
		$this->m_register_admin->register_admin();
	}
	
}
?>
 