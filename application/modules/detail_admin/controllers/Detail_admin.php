<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_detail_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "detail_admin",
			'namafileview' 	=> "V_detail_admin",
			'tampil'		=> $this->m_detail_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function detail_admin(){
		$this->m_detail_admin->detail_admin();
	}
	
}
?>
 