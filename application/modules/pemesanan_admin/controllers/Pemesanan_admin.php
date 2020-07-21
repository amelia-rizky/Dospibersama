<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesanan_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pemesanan_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pemesanan_admin",
			'namafileview' 	=> "V_pemesanan_admin",
			'tampil'		=> $this->m_pemesanan_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function pemesanan_admin(){
		$this->m_pemesanan_admin->pemesanan_admin();
	}
	
}
?>
 