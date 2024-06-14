<?php include 'head.php' ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1></h1>Riwayat
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Riwayat</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <!-- Table with stripped rows -->
          <table class="table">
            <h5><b>RIwayat Pembayaran</b></h5>
            <thead>
              <tr>
                <th scope="col" style="text-align: center">NoRegister</th>
                <th scope="col" style="text-align: center">Nama</th>
                <th scope="col" style="text-align: center">Tagihan Anda</th>
                <th scope="col" style="text-align: center">Bukti Bayar</th>
                <th scope="col" style="text-align: center">Status Pembayaran</th>
                <th scope="col" style="text-align: center">Status</th>
                <th scope="col" style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <?php
            include '../config.php'; 
            $username = $_SESSION['username']; 
            $q = mysqli_query($con, "SELECT * FROM penyambungan WHERE nama = '$username'");
            while($row = mysqli_fetch_array($q)){
            ?>
            <tbody>
              <tr>
                <th scope="row" style="text-align: center">0<?= $row['id'] ?></th>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['menu_harga'] ?></td>
                <td style="text-align: center"><a href="bukti_bayar_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-primary">Upload</a></td>
                <td style="text-align:center; color:red;"><b><?= $row['status_bayar'] ?></b></td>
                <td style="text-align:center; color:red;"><b><?= $row['status'] ?></b></td>
                <td style="text-align: center">
                  <a href="hapus_penyambungan.php?id=<?= $row['id'] ?>" class="btn btn-danger">Batalkan</a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- End Table with stripped rows -->
              <br><br><br>
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php include 'foot.php' ?>