<div class="container">
<div class="row">

	   
      <div class="card blue-grey darken-4">
        <div class="card-content white-text">
          <p class="center"><a href="<?= base_url('data'); ?>" class="btn-small left blue-grey darken-2">Home</a> Halaman Ubah Data</p>
        </div>
      </div>

<?php
	 
    if (!$data) {
      echo '<div class="red-text">Identitas barang tidak ditemukan</div>';
    }
?>



      <form action="<?= base_url('data/simpan/'.$data['id']); ?>" class="col s12" method="post">
        <div class="row">
          <div class="input-field">
            <input value="<?= $data['nama_barang']; ?>" id="nama_barang" name="nama_barang" type="text" data-length="100">
            <label for="nama_barang">Nama Barang</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field">
              <input value="<?= $data['harga'];?>" id="harga" name="harga" type="text" data-length="100">
              <label for="harga">Harga Barang</label>
            </div>
        </div>
         <div class="row">
            <div class="input-field">
              <input value="<?= $data['stok'];?>" id="stok" name="stok" type="text" data-length="100">
              <label for="stok">Stok Barang</label>
            </div>
        </div>

        <button type="submit" class="btn">Edit Data</button>
      </form>
    </div>
</div>
