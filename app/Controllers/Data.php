<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DataModel;



class Data extends Controller
{

	public function __construct()
	{
		$this->data = new DataModel();
		// $this->load->library
	}


	public function index()
	{
		$data['data'] = $this->data->tampildata();
		echo view('templates/header');
		echo view('toko/content', $data);
		echo view('templates/footer');

	}

	public function tambahdata()
	{
		$nama_barang = $this->request->getPost('nama_barang');
		$harga = $this->request->getPost('harga');
		$stok = $this->request->getPost('stok');

		$data = [
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'stok' => $stok
		];

		$tambahdata = $this->data->tambahdata($data);

		if($tambahdata)
		{
			session()->setFlashdata('berhasil', 'Data Berhasil Ditambahkan');
			return redirect()->to(base_url('data'));
		}
	}

	public function ubahdata($id)
	{
		$data['data'] = $this->data->dapatkanid($id);

		echo view('templates/header');	
		echo view('toko/ubah', $data);
		echo view('templates/footer');
	}

	public function simpan($id)
	{
		$nama_barang = $this->request->getPost('nama_barang');
		$harga = $this->request->getPost('harga');
		$stok = $this->request->getPost('stok');

		$data = [
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'stok' => $stok
		];

		$ubahdata = $this->data->ubahdata($data, $id);

		if($ubahdata)
		{
			session()->setFlashdata('berhasil', 'Data Berhasil diperbarui');

			return redirect()->to(base_url('data'));
		}		
	}

	public function hapus($id)
	{
		$this->data->hapusdata($id);
		session()->setFlashdata('berhasil', 'Data Telah Dihapus');
		return redirect()->to(base_url('data'));
	}


}



 ?>