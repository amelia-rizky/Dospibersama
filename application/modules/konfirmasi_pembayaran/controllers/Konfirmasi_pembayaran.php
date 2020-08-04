<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi_pembayaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_konfirmasi_pembayaran');
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "konfirmasi_Pembayaran",
			'namafileview' 	=> "V_konfirmasi_pembayaran",
			'tampil'		=> $this->m_konfirmasi_pembayaran->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	function bayar()
	{
		$this->m_konfirmasi_pembayaran->bayar();
		redirect('product_saya');
	}
}
?>
 