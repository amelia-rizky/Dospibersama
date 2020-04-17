<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_dospi_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_tentang_dospi_index');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tentang_dospi_index",
			'namafileview' 	=> "V_tentang_dospi_index",
			'tampil'		=> $this->M_tentang_dospi_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	}

}
 