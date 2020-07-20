<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faktur_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_faktur_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faktur_admin",
			'namafileview' 	=> "V_faktur_admin",
			'tampil'		=> $this->m_faktur_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function faktur_admin(){
		$this->m_faktur_admin->faktur_admin();
	}
	
}
?>
 