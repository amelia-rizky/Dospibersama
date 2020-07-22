<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pesan_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pesan_admin",
			'namafileview' 	=> "V_pesan_admin",
			'tampil'		=> $this->m_pesan_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function pesan_admin(){
		$this->m_pesan_admin->pesan_admin();
	}
	
}
?>