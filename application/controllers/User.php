<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function setdata()
	{
		$this->session->set_userdata('username','administrator');
		$this->session->set_userdata('nama','Budi Cahyadi');
		echo 'Session telah dibuat';
	}

	public function getdata()
	{
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$this->session->set_flashdata('success', 'Anda Berhasil Menampilkan data User');
		$this->load->view('vw_user',$data);
	}
}
