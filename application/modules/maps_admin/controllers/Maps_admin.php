<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maps_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_maps_admin');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "maps_admin",
			'namafileview' 	=> "V_maps_admin",
			'tampil'		=> $this->m_maps_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

// 		function tambah(){
// 		$this->m_kontak_penjual->layar_kunc();
// }
}
 