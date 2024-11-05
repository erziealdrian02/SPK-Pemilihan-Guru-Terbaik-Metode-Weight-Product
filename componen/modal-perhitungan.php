<!-- Modal Rangking -->
<div id="modal-view-rangking<?php echo $data_nilai['guru_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahData">
                    Edit Penilaian Guru
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center mt-4">
                        <!-- Displaying the circular image -->
                        <img src="./images/guru/<?php echo $data_nilai['profile']; ?>" alt="Foto Guru" class="img-fluid rounded-circle ml-5" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <table>
                            <tr>
                                <th>Nama:</th>
                                <td><?php echo $data_nilai['nama_guru']; ?></td>
                            </tr>
                            <tr>
                                <th>NIP:</th>
                                <td><?php echo $data_nilai['nip']; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Jenis Kelamin:</th>
                                <td><?php echo $data_nilai['jk_guru']; ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon:</th>
                                <td><?php echo $data_nilai['nmr_guru']; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat:</th>
                                <td><?php echo $data_nilai['alamat_guru']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <h5 class="text-center mt-2">Hasil Penilaian</h5>
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light" style="text-align: center;">
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
                                    <th class="border-top-0" style="vertical-align: middle;">
                                        Vector S
                                    </th>
                                    <th class="border-top-0" style="vertical-align: middle;">
                                        Vector V
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"><?php echo $data_nilai['pm']; ?></td>
                                    <td style="text-align: center;"><?php echo $data_nilai['ab']; ?></td>
                                    <td style="text-align: center;"><?php echo $data_nilai['pre']; ?></td>
                                    <td style="text-align: center;"><?php echo $data_nilai['tj']; ?></td>
                                    <td style="text-align: center;"><?php echo $data_nilai['dis']; ?></td>
                                    <td style="vertical-align: middle; text-align: center;"><?php echo $vector; ?></td>
                                    <td style="vertical-align: middle; text-align: center;"><?php echo $vector_v; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>