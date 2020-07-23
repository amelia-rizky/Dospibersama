<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_error_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "error_admin",
			'namafileview' 	=> "V_error_admin",
			'tampil'		=> $this->m_error_admin->tampil(),
		);
		echo Modules::run('template/tampilCore1', $data);
	}

	function error_admin(){
		$this->m_error_admin->error_admin();
	}
	
}
?>