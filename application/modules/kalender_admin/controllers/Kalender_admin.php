<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kalender_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kalender_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kalender_admin",
			'namafileview' 	=> "V_kalender_admin",
			'tampil'		=> $this->m_kalender_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function kalender_admin(){
		$this->m_kalender_admin->kalender_admin();
	}
	
}
?>