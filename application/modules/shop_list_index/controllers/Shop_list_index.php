<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_shop_list_index');

	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "shop_list_index",
			'namafileview' 	=> "V_shop_list_index",
			'tampil'		=> $this->M_shop_list_index->tampil(),
		);
		echo Modules::run('template/tampil_template_index', $data);
	

		// PAGINATION LOAD LIBRARI

	$this->load->library('pagination');

	// CONFIG

	$config['base_url']		= base_url().'http://localhost/Dospi/shop_list_index/index/';
	$config['total_rows']	= $this->M_shop_list_index->jumlah_data();
	$config['per_page']		= 10;
	$from['start']			= $this->uri->segment(3);

	$this->pagination->initialize($config);
	$data['data_hewan']		= $this->M_shop_list_index->data($config['per_page'],$from['start']);
	
	
	}

	
}
 