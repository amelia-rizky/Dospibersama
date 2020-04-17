<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_dospi_penjual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_tentang_dospi_penjual');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tentang_dospi_penjual",
			'namafileview' 	=> "V_tentang_dospi_penjual",
			'tampil'		=> $this->M_tentang_dospi_penjual->tampil(),
		);
		echo Modules::run('template/tampilCore4', $data);
	}

	function tentang()
	{
		$this->m_tentang_dospi_penjual->tentang();
		// redirect('tentang');
	}
}
 