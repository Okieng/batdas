<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	
	public function index()
	{
		$data['menu'] = $this->db->get('menu')->result_array();

		$this->load->view('template/header');
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');
	}

	public function menu()
	{
		$data['makanan'] = $this->db->get_where('menu', ['tipe' => 'makanan'])->result_array();
		$data['minuman'] = $this->db->get_where('menu', ['tipe' => 'minuman'])->result_array();

		$this->load->view('template/headMenu');
		$this->load->view('home/menu', $data);
		$this->load->view('template/fotMenu');
	}

	public function tambah($id)
	{

		$result = $this->db->get_where('menu', ['id' => $id])->row_array();

		$data = array(
        'id'      => $result['id'],
        'qty'     => 1,
        'price'   => $result['harga'],
        'name'    => $result['nama']
        
		);

		$this->cart->insert($data);
		redirect('home/menu');
	

		
	}

	public function keranjang()
	{
		$this->load->view('template/headMenu');
		$this->load->view('home/keranjang');
		$this->load->view('template/fotMenu');
	}

	public function hapus()
	{

		$this->cart->destroy();
		redirect('home/menu');
	}

	public function hapusId($rowid)
	{

		$this->cart->remove($rowid);
		redirect('home/keranjang');
			
	}

	public function checkout()
	{
		$this->load->view('template/headMenu');
		$this->load->view('home/checkout');
		$this->load->view('template/fotMenu');
	}

	public function insertNama()
	{
		$nama = [
			'nama_pembeli' => $this->input->post('nama')	
		];
		 $this->db->insert('pembeli', $nama );

		 $id_pembeli = $this->db->insert_id();
		
		$result = [];
		
		foreach ($this->cart->contents() as $item) {
			$result[] = array(
				'pembeli_id' => $id_pembeli,
				'menu_id' => $item['id'],
				'qty' => $item['qty'],
				'total' => $item['subtotal']

			);

			
		}
			$this->db->insert_batch('transaksi', $result);
			$this->db->trans_complete();
			
			$hasil = [];

			
			$id_transaksi = $this->db->insert_id();
			
			$hasil[] = array(
				'id_transaksi' => $id_transaksi,
				'tgl_pembelian' => $this->input->post('tgl'),
				'status' => 'belum dibayar',
				'total_harga' => $this->cart->total()

			);
		

			$this->db->insert_batch('det_transaksi', $hasil);
			$this->db->trans_complete();
			$this->cart->destroy();
			$this->session->set_flashdata('pesan','Lakukan Pembayaran di Kasir');
			redirect('home/menu');

	}


}