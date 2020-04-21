<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_pembeli extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_index')->result();
			// join
			$this->db->select('*')
				->from('tb_index')
				->join('image_slider', 'tb_index.id_imageslider = image_slider.id_imageslider')
				->join('data_hewan', 'tb_index.id_datahewan = data_hewan.id_datahewan')
				->join('tb_tentang', 'tb_index.id_tentang = tb_tentang.id_tentang')
				->join('kontak_dospi', 'tb_index.id_kontak = kontak_dospi.id_kontak')
				->join('tb_layanan', 'tb_index.id_layanan = tb_layanan.id_layanan')
				->join('tb_faq', 'tb_index.id_faq = tb_faq.id_faq')
				->where('tb_index.id_index',$id_index);
			$query = $this->db->get();
			return $query;
    }

}
?>