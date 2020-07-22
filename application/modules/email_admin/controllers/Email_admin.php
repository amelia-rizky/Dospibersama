<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_email_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "email_admin",
			'namafileview' 	=> "V_email_admin",
			'tampil'		=> $this->m_email_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function email_admin(){
		$this->m_email_admin->email_admin();
	}
	
}
?>