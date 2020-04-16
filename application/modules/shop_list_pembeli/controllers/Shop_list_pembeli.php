<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list_pembeli extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_shop_list_pembeli');

	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Shop_list_pembeli",
			'namafileview' 	=> "V_shop_list_pembeli",
			'tampil'		=> $this->M_shop_list_pembeli->tampil(),
		);
		echo Modules::run('template/tampilCore5', $data);
	

		// PAGINATION LOAD LIBRARI

	$this->load->library('pagination');

	// CONFIG

	$config['base_url']		= base_url().'http://localhost/Dospi/shop_list_pembeli/index/';
	$config['total_rows']	= $this->M_shop_list_pembeli->jumlah_data();
	$config['per_page']		= 10;
	$from['start']			= $this->uri->segment(3);

	$this->pagination->initialize($config);
	$data['data_hewan']		= $this->M_shop_list_pembeli->data($config['per_page'],$from['start']);
	
	
	}

	
}
 