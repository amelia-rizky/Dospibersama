<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_produk_admin');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "produk_admin",
			'namafileview' 	=> "V_produk_admin",
			'tampil'		=> $this->m_produk_admin->tampil(),
		);
		echo Modules::run('template/tampil_template_admin', $data);
	}

	function produk_admin(){
		$this->m_produk_admin->produk_admin();
	}
	
}
?>
 