<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('restoran');
		$this->load->library('form_validation');
	

	}
	
	public function index()
	{
		$data['menu'] = $this->db->get('menu')->result_array();
		$data['judul'] = "Menu";

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/admin', $data);
		$this->load->view('templateAdmin/footer');
		
	}

	public function kasir()
	{
		$data['kasir'] = $this->restoran->getPembeli();
		$data['judul'] = "Transaksi";

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/tranKasir', $data);
		$this->load->view('templateAdmin/footer');

	}	
	public function transaksi()
	{
		$data['transaksi'] = $this->db->get('transaksi')->result_array();
		$data['judul'] = "Transaksi";

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/transaksi', $data);
		$this->load->view('templateAdmin/footer');
		
	}

	public function detTransaksi()
	{
		$data['dettransaksi'] = $this->db->get('det_transaksi')->result_array();
		$data['judul'] = "Detail Transaksi";

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/dettransaksi', $data);
		$this->load->view('templateAdmin/footer');
		
	}

	public function hapus($id)
	{
		$this->db->delete('menu', ['id' => $id]);
		$this->session->set_flashdata('pesan','Di Hapus');
		redirect('admin');
	}

	public function hapusTran($id)
	{
		$this->db->delete('transaksi', ['id' => $id]);
		$this->session->set_flashdata('pesan','Di Hapus');
		redirect('admin/transaksi');
	}

	public function hapusdet($id)
	{
		$this->db->delete('det_transaksi', ['id' => $id]);
		$this->session->set_flashdata('pesan','Di Hapus');
		redirect('admin/dettransaksi');
	}

	public function detail($id)
	{

		$data['judul'] = 'Detail Transaksi';
		$data['detail'] = $this->restoran->getDetail($id);

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/detail', $data);
		$this->load->view('templateAdmin/footer');
	}

	public function tambahMenu()
	{

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('tipe', 'Tipe', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('qty', 'Stok', 'required');
		
		

		if ($this->form_validation->run() == FALSE)
	    {
			$data['judul'] = 'tambah';

			$this->load->view('templateAdmin/header', $data);
			$this->load->view('home/tambah', $data);
			$this->load->view('templateAdmin/footer');
		} else {



			 $uplod = $_FILES['gambar']['name'];

	                if($uplod) {
	                	 $config['allowed_types']  = 'gif|jpg|png|jpeg';
	                	 $config['max_size']     = '2048';
	                	 $config['upload_path']  = './vendor/img/listMenu';

	                	 $this->load->library('upload', $config);

				            if ($this->upload->do_upload('gambar'))
			                {                
							         $data = [

									'nama' =>  $this->input->post('nama', true),
									'gambar' => $this->upload->data('file_name'),
									'tipe' => $this->input->post('tipe', true),
									'harga' => $this->input->post('harga'),	
									'qty' => $this->input->post('qty', true)
									
									];

								$this->db->insert('menu', $data);
								$this->session->set_flashdata('pesan','Di Tambah');
								redirect('admin');
			                }
			                else
			                {
			                        echo $this->upload->display_errors();
			                }
	                }else{
	                	
	                	redirect('admin/tambahMenu');
	                }


		}
	

	}

	public function update($id)
	{
		$data['judul'] = 'Update menu';
		$data['u'] = $this->db->get_where('menu', ['id' => $id])->row_array();

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/update', $data);
		$this->load->view('templateAdmin/footer');
	}

	public function updateMenu()
		{
			
			$id = $this->input->post('id');
			$data = [ 
				'nama' => $this->input->post('nama'),
				'tipe' => $this->input->post('tipe'),
				'harga' => $this->input->post('harga'),
				'qty' => $this->input->post('qty')

			];
			$this->db->where('id', $id);
			$this->db->update('menu', $data);
			
			$this->session->set_flashdata('pesan','DiUbah');
			redirect('admin');

			
		}

	public function konfirmasi($id)
	{
		$data = [
			'status' => 'dibayar'
		];
		$this->db->where('id_transaksi', $id);
		$this->db->update('det_transaksi', $data);
		$this->session->set_flashdata('pesan','Di Bayar');
		redirect('admin/kasir');
	}

	public function logout()
	{
		 $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');

       
        redirect('auth');
	}

	public function pembeli()
	{
		$data['pembeli'] = $this->db->get('pembeli')->result_array();
		$data['judul'] = "Pembeli";

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/pembeli', $data);
		$this->load->view('templateAdmin/footer');
	}

	public function hapusPem($id)
	{
		$this->db->delete('pembeli', ['id' => $id]);
		$this->session->set_flashdata('pesan','Di Hapus');
		redirect('admin/pembeli');
	}

	public function detailTransaksi($id)
	{
		$data['det'] = $this->restoran->getAll($id);
		$data['judul'] = "Detail Transksi";

		$this->load->view('templateAdmin/header', $data);
		$this->load->view('home/detailTransaksi', $data);
		$this->load->view('templateAdmin/footer');
	}
	// public function hapustransaksi($id)
	// {

	// 	$this->db->delete('transaksi', ['id'] => $id);

	// }
	// public function hapusdetTransaksi($id)
	// {

	// 	$this->db->delete('det_transaksi', ['id'] => $id);

	// }
}
