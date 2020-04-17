<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_halaman_pembeli');

		 // dropzone
         $this->load->helper(array('form','url'));

		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_pembeli",
			'namafileview' 	=> "V_halaman_pembeli",
			'tampil'		=> $this->M_halaman_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	}

	
}
 