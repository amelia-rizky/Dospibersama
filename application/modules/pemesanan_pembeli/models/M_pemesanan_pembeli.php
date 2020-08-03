<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_pembeli extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('data_hewan');
		$this->db->join('tb_komentar', 'data_hewan.id_datahewan = tb_komentar.id_datahewan');
		$this->db->join('jenis_hewan', 'jenis_hewan.id_jenis = data_hewan.id_jenis');
		
		$this->db->join('tb_makanan','tb_makanan.id_makanan = data_hewan.id_makanan');
		$this->db->join('gambar_hewan', 'gambar_hewan.id_gambar = data_hewan.id_gambar');
		$this->db->join('kategori_hewan','kategori_hewan.id_kategori= data_hewan.id_kategori');
		$query = $this->db->get();

		return $query->result();
	}
	
	function detail_hewan($id_datahewan){
		$this->db->select('*');
		$this->db->from('data_hewan');
		$this->db->where('data_hewan.id_datahewan',$id_datahewan);
		$this->db->join('tb_komentar', 'data_hewan.id_datahewan = tb_komentar.id_datahewan');
		$this->db->join('jenis_hewan', 'jenis_hewan.id_jenis = data_hewan.id_jenis');
		
		$this->db->join('tb_makanan','tb_makanan.id_makanan = data_hewan.id_makanan');
		$this->db->join('gambar_hewan', 'gambar_hewan.id_gambar = data_hewan.id_gambar');
		$this->db->join('kategori_hewan','kategori_hewan.id_kategori= data_hewan.id_kategori');
		$query = $this->db->get();
		return $query->result();
	}

}