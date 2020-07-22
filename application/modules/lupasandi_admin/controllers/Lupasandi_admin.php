<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lupasandi_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_lupasandi_admin');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "lupasandi_admin",
			'namafileview' 	=> "V_lupasandi_admin",
			'tampil'		=> $this->m_lupasandi_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_login_admin', $data);
	}
}