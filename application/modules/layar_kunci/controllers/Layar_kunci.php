<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layar_kunci extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_layar_kunci');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "layar_kunci",
			'namafileview' 	=> "V_layar_kunci",
			'tampil'		=> $this->m_layar_kunci->tampil(),
		);
		echo Modules::run('template/tampil_template_login_admin', $data);
	}

// 		function tambah(){
// 		$this->m_kontak_penjual->layar_kunc();
// }
}
 