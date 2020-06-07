 
 <!-- Navbar -->
  <nav class="grey darken-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Aplikasi Toko</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Home</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">apps</i></a>
    </div>
  </nav>

<br> 

<!-- konten -->
  <div class="container">

    <!-- Alert dan validasi -->

<?php 
    if(!empty(session()->getFlashdata('berhasil'))) : ?>

    <div class="row">
    <div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <p><?= session()->getFlashdata('berhasil'); ?></p>
        </div>
      </div>
    </div>
  </div>

<?php endif ?>

  <div class="row">
    <div class="col s3">
      <a class="btn modal-trigger blue-grey lighten-3 red-text" href="#modal1">Tambah Barang</a>
    </div>
    <div class="col s9">
      <input type="text" class="formcari" placeholder="Cari Data Barang...!" />
    </div>
  <!-- Modal Tambah Data -->
  

  

  </div>

  <!-- Form Pemcarian Barang -->
 
 
   



  <!-- Modal Structure -->
  <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Tambah Data Barang</h4>
      
        <!-- form -->

      <div class="row">
      <form action="<?= base_url('data/tambahdata'); ?>" class="col s12" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input id="nama_barang" name="nama_barang" type="text" data-length="100">
            <label for="nama_barang">Nama Barang</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
              <input id="harga" name="harga" type="text" data-length="100">
              <label for="harga">Harga Barang</label>
            </div>
        </div>
         <div class="row">
            <div class="input-field col s6">
              <input id="stok" name="stok" type="text" data-length="100">
              <label for="stok">Stok Barang</label>
            </div>
        </div>

        <button type="submit" class="btn">Tambah Data</button>
      </form>
    </div>


      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
  </div>      

    <!-- tabel barang -->



     <table class="striped tabel">
        <thead class="blue-grey lighten-1">
          <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Harga Barang</th>
              <th>Stok Barang</th>
              <th>Hapus Data</th>
              <th>Ubah Data</th>
          </tr>
        </thead>
<?php
  $no=1;
 foreach($data as $d) : ?>
        <tbody> 	
          <tr">
            <td><?= $no++; ?></td>
            <td><?= $d['nama_barang']; ?></td>
            <td><?= $d['harga'];  ?></td>
            <td><?= $d['stok'];  ?></td>
            <td><a class="btn-small pink" href="<?= base_url('data/hapus')?>/<?= $d['id']; ?>" onclick="return confirm('yakin hapus data ?')">Hapus</a></td>
            <th><a class="btn-small" href="<?= base_url('data/ubahdata'); ?>/<?= $d['id']; ?>">Ubah</a></th>
          </tr>     
        </tbody>
<?php endforeach; ?>

      </table>   
  </div>


<!-- Footer -->
<div class="container">
	<br>
  <footer class="grey darken-2">
    	<p class="center grey darken-5">Afif Husain - Ranah Media Teknologi 2020</p>
  </footer>
</div>