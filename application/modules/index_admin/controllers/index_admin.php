<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_index_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "index_admin",
			'namafileview' 	=> "V_index_admin",
			'tampil'		=> $this->m_index_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function index_admin(){
		$this->m_index_admin->index_admin();
	}
	
}
?>
 