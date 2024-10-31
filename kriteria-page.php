<?php
include './componen/header.php';
include './process/koneksi.php';
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
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <!-- title -->
                           <div class="d-md-flex align-items-center">
                              <div>
                                 <h4 class="card-title">
                                    Bobot Kriteria
                                 </h4>
                                 <p class="card-subtitle">
                                    Bobot Kriteria Penilaian
                                 </p>
                              </div>
                           </div>
                           <!-- title -->
                        </div>
                        <div class="table-responsive">
                           <table class="table v-middle">
                              <thead>
                                 <tr class="bg-light" style="text-align: center; vertical-align: middle;">
                                    <th class="border-top-0">
                                       Penyampaian Materi
                                    </th>
                                    <th class="border-top-0">
                                       Absensi
                                    </th>
                                    <th class="border-top-0">
                                       Prestasi
                                    </th>
                                    <th class="border-top-0">
                                       Tanggung Jawab
                                    </th>
                                    <th class="border-top-0">
                                       Disiplin
                                    </th>
                                    <th class="border-top-0">
                                       Aksi
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $no = 1;
                                 $select = mysqli_query($connect, "SELECT * FROM kriteria");
                                 while ($data = mysqli_fetch_array($select)) {
                                 ?>
                                    <tr style="text-align: center; vertical-align: middle;">
                                       <td style="width: 17%; "><?php echo $data['pm']; ?></td>
                                       <td style="width: 16%; "><?php echo $data['ab']; ?></td>
                                       <td style="width: 16%; "><?php echo $data['pre']; ?></td>
                                       <td style="width: 16%; "><?php echo $data['tj']; ?></td>
                                       <td style="width: 16%; "><?php echo $data['dis']; ?></td>
                                       <td style="width: 15%; ">
                                          <a type="button" class="btn btn-warning text-white" role="button" aria-disabled="true" data-toggle="modal" data-target="#modal-edit-kriteria<?php echo $data['kriteria_id']; ?>">
                                             <i class="feather icon-edit"></i>
                                          </a>
                                          <?php include './componen/modal-kriteria.php' ?>
                                       </td>
                                    </tr>
                                 <?php
                                 } ?>
                              </tbody>
                           </table>
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