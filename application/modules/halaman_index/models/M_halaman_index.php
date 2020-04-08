<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_index extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_index')->result();
			// join
			$this->db->select('*')
				->from('tb_index')
				->join('tb_tentang', 'tb_index.id_tentang = tb_tentang.id_tentang')
				->join('tb_layanan', 'tb_index.id_layanan = tb_layanan.id_layanan')
				->where('tb_index.id_index',$id_index);
			$query = $this->db->get();
			return $query;
    }
    

}
?>