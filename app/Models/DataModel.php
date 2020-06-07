<?php 

namespace App\Models;
use CodeIgniter\Model;

class DataModel extends Model
{
	protected $table = 'toko';
	protected $returnType = 'array';

	public function tampildata()
	{
		return $this->table('toko')->get()->getResultArray();
	}

	public function tambahdata($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function dapatkanid($id)
	{
		return $this->table('toko')->where('id', $id)->get()->getRowArray();
	}

	public function ubahdata($data, $id)
	{
		return $this->db->table($this->table)->update($data,['id' => $id]);
	}

	public function hapusdata($id)
	{
		return $this->db->table($this->table)->delete(['id' => $id]);
	}	

}

 ?>