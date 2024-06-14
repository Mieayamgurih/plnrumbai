<?php 
    include 'head.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Pengaduan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Pelayanan</li>
      <li class="breadcrumb-item active">Pengaduan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" action="aksi_pengaduan.php" method="post">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $_SESSION['username'] ?>" readonly>
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nomor Whatsapp</label>
              <input type="text" class="form-control" name="whatsapp">
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat">
            </div>
            <div class="col-md-12">
               <label for="inputName5" class="form-label">Kelurahan</label>
               <select class="form-control" name="kecamatan">
                <option value="">Select an option</option>
                <option value="Limbungan Baru">Limbungan Baru</option>
                <option value="Meranti Pandak">Meranti Pandak</option>
                <option value="Lembah Damai">Lembah Damai</option>
                <option value="Umban Sari">Umban Sari</option>
                <option value="Sri Meranti">Sri Meranti</option>
                <option value="Palas">Palas</option>
              </select>
            </div>
            <div class="col-md-12">
              <label for="inputName5" class="form-label">Nomor Token</label>
              <input type="text" class="form-control" name="nomormeteran">
            </div>
            <div class="col-md-12">
               <label for="inputName5" class="form-label">Jenis Aduan</label>
               <select class="form-control" name="jenisaduan">
                <option value="">Select an option</option>
                <option value="Gangguan pada Jaringan Listrik">Gangguan pada Jaringan Listrik</option>
                <option value="Meteran yang Tidak Akurat">Meteran yang Tidak Akurat</option>
                <option value="Pemadaman Listrik Mendadak">Pemadaman Listrik Mendadak</option>
                <option value="Tagihan yang Tiba-tiba Meningkat">Tagihan yang Tiba-tiba Meningkat</option>
                <option value="Kerusakan pada Instalasi Listrik Rumah">Kerusakan pada Instalasi Listrik Rumah</option>
                <option value="Masalah Lain Terkait Kelistrikan">Masalah Lain Terkait Kelistrikan</option>
              </select>
              <br>
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Rincian Pengaduan </label>
                <textarea name="pengaduan" cols="53" rows="8" class="form-control"></textarea>    
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><i class="bi bi-telegram"></i>  Kirim</button>
            </div>
          </form><!-- End Multi Columns Form -->
            <br>
          <p style="font-style:italic; color:red">*Respon atau tanggapan atas pengaduan anda akan anda terima di nomor whatsapp yang anda input, mohon menunggu beberapa saat. Terimakasih...</p>

        </div>
      </div>

    </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>