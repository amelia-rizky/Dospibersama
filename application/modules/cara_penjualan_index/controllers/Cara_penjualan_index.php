<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cara_penjualan_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_cara_penjualan_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_penjualan_index",
			'namafileview' 	=> "V_cara_penjualan_index",
			'tampil'		=> $this->M_cara_penjualan_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

	
}
 