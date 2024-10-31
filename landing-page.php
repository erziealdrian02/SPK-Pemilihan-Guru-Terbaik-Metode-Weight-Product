<?php
include './componen/header.php';
include './process/koneksi.php';
?>

<?php
// Fetch total customers
$result = mysqli_query($connect, "SELECT COUNT(*) AS count FROM guru");
$row = mysqli_fetch_assoc($result);
$total_customers = $row['count'];
?>

<body id="landing" class="sidebar-open">
   <div class="page-container animsition">
      <div id="dashboardPage">
         <!-- Main Menu -->
         <?php
         include './componen/navbar.php';
         include './componen/sidebar.php';
         ?>

         <main>
            <?php
            include './componen/breadcrumb.php';
            ?>

            <div class="container-fluid">
               <div class="row">
                  <!-- column -->
                  <div class="col-sm-12 col-lg-6">
                     <div class="card card-hover">
                        <div class="card-body">
                           <div class="d-flex">
                              <div class="mr-4">
                                 <small>Guru</small>
                                 <h4 class="mb-0"><?php echo $total_customers ?> Orang</h4>
                              </div>
                              <div class="chart ml-auto">Sistem Pemilihan Keputusan</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- column -->
                  <div class="col-sm-12 col-lg-6">
                     <div class="card card-hover bg-red">
                        <div class="card-body">
                           <div class="d-flex">
                              <div class="mr-4">
                                 <small>Kriteria</small>
                                 <h4 class="mb-0">5 Kriteria</h4>
                              </div>
                              <div class="chart ml-auto">Sistem Pemilihan Keputusan</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- column -->
               </div>

               <div class="row">
                  <!-- column -->
                  <div class="col-lg-4">
                     <div class="card card-hover" style="border-radius:100%">
                        <img src="./images/about-image.jpg" style="object-fit: cover; border-radius:100%" alt="">
                     </div>
                  </div>
                  <!-- column -->
                  <div class="col-lg-8">
                     <div class="card card-hover">
                        <div class="card-body">
                           <h4>Kurnia Handayanti</h4>
                           <h5>202043501328</h5>
                           <p>Saya adalah mahasiswa akhir di Universitas Indraprasta PGRI, Fakultas Teknik Informatika dan saya merupakan .... (Lanjutin ae kur ada di landing-page.php line 73)</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php include './componen/modal.php' ?>
            <!-- Footer -->
            <?php include './componen/footer.php' ?>
         </main>
      </div>
   </div>

   <?php
   include './componen/script.php';
   ?>