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
                                    Daftar Perhitungan
                                 </h4>
                                 <p class="card-subtitle">
                                    Daftar Perhitungan Guru
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
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       Vector S
                                    </th>
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       Vector V
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
                                 while ($data_nilai = mysqli_fetch_array($select)) {
                                    $vector_sums = [];
                                    $select_bobot = mysqli_query($connect, "SELECT * FROM kriteria");
                                    // Menghitung Bobot dan Vector S untuk setiap baris data
                                    while ($data_bobot = mysqli_fetch_array($select_bobot)) {
                                       $total_bobot = $data_bobot['pm'] + $data_bobot['ab'] + $data_bobot['pre'] + $data_bobot['tj'] + $data_bobot['dis'];
                                       $bobot_1 = $data_bobot['pm'] / $total_bobot;
                                       $bobot_2 = $data_bobot['ab'] / $total_bobot;
                                       $bobot_3 = $data_bobot['pre'] / $total_bobot;
                                       $bobot_4 = $data_bobot['tj'] / $total_bobot;
                                       $bobot_5 = $data_bobot['dis'] / $total_bobot;

                                       // Menghitung Vector S
                                       $vector = pow($data_nilai['pm'], $bobot_1) *
                                          pow($data_nilai['ab'], $bobot_2) *
                                          pow($data_nilai['pre'], $bobot_3) *
                                          pow($data_nilai['tj'], $bobot_4) *
                                          pow($data_nilai['dis'], $bobot_5);

                                       // Simpan Vector S ke dalam array
                                       $vector_sums[] = $vector;
                                    }
                                 }
                                 $total_vector_s = array_sum($vector_sums);
                                 mysqli_data_seek($select, 0);
                                 while ($data_nilai = mysqli_fetch_array($select)) {
                                    $select_bobot = mysqli_query($connect, "SELECT * FROM kriteria");
                                    while ($data_bobot = mysqli_fetch_array($select_bobot)) {
                                       $total_bobot = $data_bobot['pm'] + $data_bobot['ab'] + $data_bobot['pre'] + $data_bobot['tj'] + $data_bobot['dis'];
                                       $bobot_1 = $data_bobot['pm'] / $total_bobot;
                                       $bobot_2 = $data_bobot['ab'] / $total_bobot;
                                       $bobot_3 = $data_bobot['pre'] / $total_bobot;
                                       $bobot_4 = $data_bobot['tj'] / $total_bobot;
                                       $bobot_5 = $data_bobot['dis'] / $total_bobot;

                                       // Menghitung Vector S
                                       $vector = pow($data_nilai['pm'], $bobot_1) *
                                          pow($data_nilai['ab'], $bobot_2) *
                                          pow($data_nilai['pre'], $bobot_3) *
                                          pow($data_nilai['tj'], $bobot_4) *
                                          pow($data_nilai['dis'], $bobot_5);

                                       // Menghitung Vector V
                                       $vector_v = $vector / $total_vector_s;
                                       $vector = number_format($vector, 2, '.', '');
                                       $vector_v = number_format($vector_v, 2, '.', '');
                                    }
                                 ?>
                                    <tr>
                                       <td style="width: 1%; vertical-align: middle; "><?php echo $no; ?></td>
                                       <td style="width: 27%; vertical-align: middle; ">
                                          <div class=" d-flex">
                                             <div class="">
                                                <h4 class="m-b-0 font-16">
                                                   <a href="" aria-disabled="true" data-toggle="modal" data-target="#modal-view-rangking<?php echo $data_nilai['guru_id']; ?>">
                                                      <?php echo $data_nilai['nama_guru']; ?>
                                                   </a>
                                                </h4>
                                             </div>
                                          </div>
                                          <?php include './componen/modal-perhitungan.php' ?>
                                       </td>
                                       <td style="text-align: center;"><?php echo $data_nilai['pm']; ?></td>
                                       <td style="text-align: center;"><?php echo $data_nilai['ab']; ?></td>
                                       <td style="text-align: center;"><?php echo $data_nilai['pre']; ?></td>
                                       <td style="text-align: center;"><?php echo $data_nilai['tj']; ?></td>
                                       <td style="text-align: center;"><?php echo $data_nilai['dis']; ?></td>
                                       <td style="vertical-align: middle; text-align: center;"><?php echo $vector; ?></td>
                                       <td style="vertical-align: middle; text-align: center;"><?php echo $vector_v; ?></td>
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