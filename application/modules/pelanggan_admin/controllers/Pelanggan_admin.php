<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pelanggan_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pelanggan_admin",
			'namafileview' 	=> "V_pelanggan_admin",
			'tampil'		=> $this->m_pelanggan_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function pelanggan_admin(){
		$this->m_pelanggan_admin->pelanggan_admin();
	}
	
}
?>