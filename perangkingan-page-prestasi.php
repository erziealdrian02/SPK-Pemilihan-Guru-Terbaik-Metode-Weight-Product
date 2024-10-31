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
                                    Daftar Rangking
                                 </h4>
                                 <p class="card-subtitle">
                                    Daftar Rangking Guru
                                 </p>
                              </div>
                              <div class="ml-auto">
                                 <div class="dl">
                                    <a type="button" class="btn btn-success text-white" target="_blank" role="button" href="./process/print-prestasi.php">
                                       <i class="feather icon-printer"></i>
                                    </a>
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
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       Rangking
                                    </th>
                                    <th class="border-top-0">
                                       <a href="./perangkingan-page-materi.php">Penyampaian Materi</a>
                                    </th>
                                    <th class="border-top-0">
                                       <a href="./perangkingan-page-absen.php">Absensi</a>
                                    </th>
                                    <th class="border-top-0">
                                       <a href="./perangkingan-page-prestasi.php">Prestasi</a>
                                    </th>
                                    <th class="border-top-0">
                                       <a href="./perangkingan-page-tanggung.php">Tanggung Jawab</a>
                                    </th>
                                    <th class="border-top-0">
                                       <a href="./perangkingan-page-siplin.php">Disiplin</a>
                                    </th>
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       <a href="./perangkingan-page.php">Vector S</a>
                                    </th>
                                    <th class="border-top-0" style="vertical-align: middle;" rowspan="2">
                                       <a href="./perangkingan-page.php">Vector V</a>
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
                                 $data_list = [];
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

                                       // Simpan data ke dalam array
                                       $data_list[] = [
                                          'no' => $no,
                                          'nama_guru' => $data_nilai['nama_guru'],
                                          'pm' => $data_nilai['pm'],
                                          'ab' => $data_nilai['ab'],
                                          'pre' => $data_nilai['pre'],
                                          'tj' => $data_nilai['tj'],
                                          'dis' => $data_nilai['dis'],
                                          'vector' => $vector,
                                          'vector_v' => $vector_v
                                       ];
                                       $no++;
                                    }
                                 }

                                 // Urutkan array berdasarkan nilai 'pm' dari besar ke kecil
                                 usort($data_list, function ($a, $b) {
                                    return $b['pre'] <=> $a['pre'];
                                 });

                                 // Tampilkan data yang sudah diurutkan menggunakan while
                                 $index = 0; // Ubah $index menjadi 0 agar array tidak ada yang terlewat
                                 $total_data = count($data_list);
                                 while ($index < $total_data) {
                                    $data = $data_list[$index];
                                 ?>
                                    <tr style="text-align: center; vertical-align: middle;">
                                       <td style="width: 1%; vertical-align: middle;"><?php echo $data['no']; ?></td>
                                       <td style="width: 27%; vertical-align: middle;">
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <h4 class="m-b-0 font-16">
                                                   <?php echo $data['nama_guru']; ?>
                                                </h4>
                                             </div>
                                          </div>
                                       </td>
                                       <td style="width: 1%; vertical-align: middle;"><?php echo $index + 1; ?></td> <!-- Menampilkan indeks + 1 agar tidak mulai dari 0 -->
                                       <td><?php echo $data['pm']; ?></td>
                                       <td><?php echo $data['ab']; ?></td>
                                       <td><?php echo $data['pre']; ?></td>
                                       <td><?php echo $data['tj']; ?></td>
                                       <td><?php echo $data['dis']; ?></td>
                                       <td style="vertical-align: middle;"><?php echo $data['vector']; ?></td>
                                       <td style="vertical-align: middle;"><?php echo $data['vector_v']; ?></td>
                                    </tr>

                                    <!-- Modal -->
                                 <?php
                                    $index++;
                                 }
                                 ?>
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