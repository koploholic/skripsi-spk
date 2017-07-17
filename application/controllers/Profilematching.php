<?php 
class Profilematching extends CI_Controller{

	public function __construct()
   	{
        parent::__construct();
    }

	public function index()
	{

		$this->load->view('home');
	}

	public function data_pegawai()
	{

		$this->load->view('referensi/pegawai');
	}
	public function data_departemen()
	{

		$this->load->view('referensi/departemen');
	}
}

?>