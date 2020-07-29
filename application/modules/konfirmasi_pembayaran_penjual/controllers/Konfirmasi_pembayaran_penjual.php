<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi_pembayaran_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_konfirmasi_pembayaran_penjual');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "konfirmasi_pembayaran_penjual",
			'namafileview' 	=> "V_konfirmasi_pembayaran_penjual",
			'tampil'		=> $this->m_konfirmasi_pembayaran_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	
}
?>
 