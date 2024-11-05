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
                                    Daftar Guru
                                 </h4>
                                 <p class="card-subtitle">
                                    Daftar Guru
                                 </p>
                              </div>
                              <div class="ml-auto">
                                 <div class="dl">
                                    <a type="button" class="btn btn-success text-white" role="button" aria-disabled="true" data-toggle="modal" data-target="#modal-add-guru">
                                       <i class="feather icon-plus"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <!-- title -->
                        </div>
                        <div class="table-responsive">
                           <table class="table v-middle">
                              <thead>
                                 <tr class="bg-light">
                                    <th class="border-top-0">
                                       Nama Guru
                                    </th>
                                    <th class="border-top-0">
                                       NIP
                                    </th>
                                    <th class="border-top-0">
                                       Jenis Kelamin
                                    </th>
                                    <th class="border-top-0">
                                       Nomor Telephone
                                    </th>
                                    <th class="border-top-0">
                                       Alamat
                                    </th>
                                    <th class="border-top-0">
                                       Aksi
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $no = 1;
                                 $select = mysqli_query($connect, "SELECT * FROM guru");
                                 while ($data = mysqli_fetch_array($select)) {
                                 ?>
                                    <tr>
                                       <td style="vertical-align: middle; width: 27%;" style="width: 19%;">
                                          <div class=" d-flex align-items-center">
                                             <div class="m-r-10">
                                                <?php if ($data['profile']) { ?>
                                                   <img src="./images/guru/<?php echo $data['profile']; ?>" alt="Foto Guru" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                                <?php } else { ?>
                                                   <a class="btn btn-circle btn-info text-white">
                                                      <?php
                                                      $initials = strtoupper(substr($data['nama_guru'], 0, 2));
                                                      echo $initials;
                                                      ?>
                                                   </a>
                                                <?php } ?>
                                             </div>
                                             <div class="">
                                                <h4 class="m-b-0 font-16">
                                                   <?php echo $data['nama_guru']; ?>
                                                </h4>
                                             </div>
                                          </div>
                                       </td>
                                       <td style="vertical-align: middle;"><?php echo $data['nip']; ?></td>
                                       <td style="vertical-align: middle;"><?php echo $data['jk_guru']; ?></td>
                                       <td style="vertical-align: middle;"><?php echo $data['nmr_guru']; ?></td>
                                       <td style="width: 20%; vertical-align: middle;"><?php echo $data['alamat_guru']; ?></td>
                                       <td style="width: 12%; vertical-align: middle;">
                                          <a type="button" class="btn btn-warning text-white" role="button" aria-disabled="true" data-toggle="modal" data-target="#modal-edit-guru<?php echo $data['guru_id']; ?>">
                                             <i class="feather icon-edit"></i>
                                          </a>
                                          <a type="button" class="btn btn-danger text-white" href="./process/hapus-guru.php?guru_id=<?php echo $data['guru_id']; ?>">
                                             <i class="feather icon-trash"></i>
                                          </a>
                                          <?php include './componen/modal-guru.php' ?>
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