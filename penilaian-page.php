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
                                    Daftar Penilaian
                                 </h4>
                                 <p class="card-subtitle">
                                    Daftar Penilaian Guru
                                 </p>
                              </div>
                              <div class="ml-auto">
                                 <div class="dl">
                                    <!-- <a type="button" class="btn btn-success text-white" role="button" aria-disabled="true" data-toggle="modal" data-target="#modal-add-guru">
                                       <i class="feather icon-plus"></i>
                                    </a> -->
                                 </div>
                              </div>
                           </div>
                           <!-- title -->
                        </div>
                        <div class="table-responsive">
                           <table class="table v-middle">
                              <thead>
                                 <tr class="bg-light" style="text-align: center;">
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       No
                                    </th>
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       Nama Guru
                                    </th>
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
                                    <th class="border-top-0" rowspan="2" style="vertical-align: middle;">
                                       Aksi
                                    </th>
                                 </tr>
                                 <?php
                                 $no = 1;
                                 $select = mysqli_query($connect, "SELECT * FROM kriteria");
                                 while ($data = mysqli_fetch_array($select)) {
                                 ?>
                                    <tr class="bg-light" style="text-align: center; vertical-align: middle;">
                                       <th class="border-top-0">
                                          <?php echo $data['pm']; ?>
                                       </th>
                                       <th class="border-top-0">
                                          <?php echo $data['ab']; ?>
                                       </th>
                                       <th class="border-top-0">
                                          <?php echo $data['pre']; ?>
                                       </th>
                                       <th class="border-top-0">
                                          <?php echo $data['tj']; ?>
                                       </th>
                                       <th class="border-top-0">
                                          <?php echo $data['dis']; ?>
                                       </th>
                                    </tr>
                                 <?php
                                 } ?>
                              </thead>
                              <tbody>
                                 <?php
                                 $no = 1;
                                 $select = mysqli_query($connect, "SELECT * FROM guru");
                                 while ($data = mysqli_fetch_array($select)) {
                                 ?>
                                    <tr style="text-align: center; vertical-align: middle; ">
                                       <td style="width: 1%;"><?php echo $no; ?></td>
                                       <td style="width: 27%;" style="width: 19%;">
                                          <div class=" d-flex align-items-center">
                                             <div class="">
                                                <h4 class="m-b-0 font-16">
                                                   <?php echo $data['nama_guru']; ?>
                                                </h4>
                                             </div>
                                          </div>
                                       </td>
                                       <td style="width: 10%; "><?php echo $data['pm']; ?></td>
                                       <td style="width: 10%; "><?php echo $data['ab']; ?></td>
                                       <td style="width: 10%; "><?php echo $data['pre']; ?></td>
                                       <td style="width: 10%; "><?php echo $data['tj']; ?></td>
                                       <td style="width: 10%; "><?php echo $data['dis']; ?></td>
                                       <td style="width: 10%; ">
                                          <a type="button" class="btn btn-warning text-white" role="button" aria-disabled="true" data-toggle="modal" data-target="#modal-edit-penilaian<?php echo $data['guru_id']; ?>">
                                             <i class="feather icon-edit"></i>
                                          </a>
                                          <?php include './componen/modal-penilaian.php' ?>
                                       </td>
                                    </tr>
                                 <?php
                                    $no++;
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