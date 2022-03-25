<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('produk');
	}
	public function index()
	{
		$queryAllBarang = $this->produk->getDataBarang();
		$DATA = array('queryAllProduk' => $queryAllBarang);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah() {
		$this->load->view('halaman_tambah_brg');
	}

	public function halaman_edit($id) {
		$querybarangdetail = $this->produk->detailBarang($id);
		$DATA = array('queryBrgdetail'=>$querybarangdetail);
		$this->load->view('halaman_edit_brg',$DATA);
	}

	public function fungsiAdd(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');

		$ArrayInsert = array(
			'id' => $id,
			'nama' => $nama,
			'harga' => $harga
		);

		$this->produk->insertBarang($ArrayInsert);
		redirect(base_url(''));

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";
	}

	public function fungsiEdit(){

		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$harga=$this->input->post('harga');

		$arrayupdate=array(
			'nama' => $nama,
			'harga' => $harga
		);

		$this->produk->updateBarang($id, $arrayupdate);
		redirect(base_url(''));
	}
	
	public function fungsiHapus($id){
		$this->produk->deleteBarang($id);
		redirect(base_url(''));
	}
}
