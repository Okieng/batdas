<?php 


class Restoran extends  CI_model
{
	
	public function getPembeli()
	{

		$query = "SELECT pembeli.nama_pembeli, det_transaksi.id_transaksi, menu.nama, transaksi.qty, det_transaksi.tgl_pembelian, det_transaksi.status, det_transaksi.total_harga FROM pembeli JOIN transaksi ON pembeli.id = transaksi.pembeli_id JOIN menu ON menu.id = transaksi.menu_id JOIN det_transaksi ON transaksi.id = det_transaksi.id_transaksi";

		return $this->db->query($query)->result_array();

	}

	public function getAll($id)
	{

		$query = "SELECT pembeli.nama_pembeli, det_transaksi.tgl_pembelian, det_transaksi.status, det_transaksi.total_harga FROM pembeli JOIN transaksi ON pembeli.id = transaksi.pembeli_id JOIN det_transaksi ON transaksi.id = det_transaksi.id_transaksi WHERE det_transaksi.id_transaksi = $id";

		return $this->db->query($query, 0, 3)->row_array();

	}
}