<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_profil_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "profil_admin",
			'namafileview' 	=> "V_profil_admin",
			'tampil'		=> $this->m_profil_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function profil_admin(){
		$this->m_profil_admin->profil_admin();
	}
	
}
?>
 