<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function index()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() === FALSE){
			$this->load->view('template/auth/header');
			$this->load->view('auth/login');
			$this->load->view('template/auth/footer');
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['email' => $email])->row_array();

			if($user){
				if($user['password'] == $password){
					redirect('home');
					
				}else{
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger text-center" role="alert">Password salah !</div>'
					);
					redirect('auth');
				}

			}else{
				$this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-danger text-center" role="alert">Email tidak terdaftar !</div>'
        );
        redirect('auth');
			}
		}
	}


	public function registrasi()
	{

		$this->form_validation->set_rules('nama' , 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email' , 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password' , 'Password', 'required|trim|matches[passconf]');
		$this->form_validation->set_rules('passconf' , 'Konfirmasi Password', 'required|trim|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('template/auth/header');
			$this->load->view('auth/register');
			$this->load->view('template/auth/footer');
		}else{
			$nama = $this->input->post('nama', TRUE);
			$email = $this->input->post('email', TRUE);
			$password = $this->input->post('password', TRUE);
			$data = [
				'nama' => $nama,
				'email' => $email,
				'password' => $password,
				'gambar' => 'default.jpg',
				'level' => '3',
				'status' => 'aktif'
			];
			$this->db->insert('user', $data);
			redirect('home');
		}
	}

}
