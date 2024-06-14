<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Sambungan Baru</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Sambungan Baru</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" action="aksi_penyambungan.php" method="post">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $_SESSION['username'] ?>" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Provinsi</label>
              <select id="inputState" class="form-select" name="provinsi">
                <option value="Riau">Riau</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Kota/Kabupaten</label>
              <select id="inputState" class="form-select" name="kabupaten">
                <option value="Kota Pekanbaru">Kota Pekanbaru</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Unit Layanan</label>
              <select id="inputState" class="form-select">
              <option value="Rumbai Timur">Rumbai Timur</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Kecamatan</label>
              <select id="inputState" class="form-select" name="kecamatan">
                <option value="Rumbai Timur">Rumbai Timur</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Desa/Kelurahan</label>
              <select id="inputState" class="form-select" name="desa">
                <option selected>Choose...</option>
                <option value="Lembah Sari">Lembah Sari</option>
              </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Detail Alamat</label>
                <textarea name="alamat" cols="53" rows="5" class="form-control"></textarea>    
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Nomor Whatsapp</label>
              <input type="text" class="form-control" id="inputEmail5" name="whatsapp">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="inputPassword5" name="telepon">
            </div>
            <div class="col-md-12">
              <label for="inputState" class="form-label">Tagihan</label>
              <input type="text" class="form-control" name="menu_harga">
            </div>
            <input type="hidden" name="status_bayar" value="Belum Bayar">
            <input type="hidden" name="status" value="PENDING">
            <input type="hidden" name="teknisi" value="NONE">
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>  Bayar</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>