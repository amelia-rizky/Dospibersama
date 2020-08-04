<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konfirmasi_pembayaran extends CI_Model {

	function tampil()
	{
		return $this->db->get('konfirmasi_bayar')->result();
	}
	function bayar()
	{
		// Table Tambah Hewan

		$namalengkap		= $this->input->post('nama_lengkap');
		$email				= $this->input->post('email');
		$notlp				= $this->input->post('no_tlp');
		$jenistransaksi		= $this->input->post('jenis_transaksi');
		$tglbayar			= $this->input->post('tgl_bayar');
		$metodebayar		= $this->input->post('metode_bayar');
		$bank				= $this->input->post('bank');
		$pemilikrekening	= $this->input->post('pemilik_rekening');
		$buktibayar			= $this->input->post('bukti_bayar');
		


		$konfirmasibayar = array(
			'nama_lengkap' 		=> $namalengkap,
			'email' 			=> $email,
			'no_tlp'			=> $notlp,
			'jenis_transaksi'	=> $jenistransaksi,
			'tgl_bayar'			=> $tglbayar,
			'metode_bayar'		=> $metodebayar,
			'bank'				=> $bank,
			'pemilik_rekening'	=> $pemilikrekening,
			'bukti_bayar'		=> $buktibayar,
			
		 );
		$this->db->insert('konfirmasi_bayar',$konfirmasibayar);


	}

}