<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
  
  
	public function index()
	{
		$nama = $this->input->post('nama');
		$pass = $this->input->post('password');
		
		   $cek = $this->db->get_where('user', ['nama' => $nama])->row_array();

		 

		// kalo ada
		if($cek) {
			// cek password
		
				
				$data = [
					'role_id' => $cek['role_id'],
					'nama' => $cek['nama']
				];
				$this->session->set_userdata($data);
				if($cek['role_id'] == 1) {

				redirect('admin');
			}else {
				redirect('admin/kasir');
			}
				
		
		}else{
			$this->load->view('home/login');
		}
			
	}
	
}
