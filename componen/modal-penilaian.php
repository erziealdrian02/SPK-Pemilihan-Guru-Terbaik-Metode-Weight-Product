<!-- Modal Edit -->
<div id="modal-edit-penilaian<?php echo $data['guru_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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
                <form id="form-add-karyawan" class="form-floating" action="./process/edit-penilaian.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_guru" class="float-left">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pm" class="float-left">Nilai Penyampaian Materi</label>
                        <input type="number" class="form-control" id="pm" name="pm" max="5" value="<?php echo $data['pm']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ab" class="float-left">Nilai Absensi</label>
                        <input type="number" class="form-control" id="ab" name="ab" max="5" value="<?php echo $data['ab']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pre" class="float-left">Nilai Prestasi</label>
                        <input type="number" class="form-control" id="pre" name="pre" max="5" value="<?php echo $data['pre']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tj" class="float-left">Nilai Tanggung Jawab</label>
                        <input type="number" class="form-control" id="tj" name="tj" max="5" value="<?php echo $data['tj']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="dis" class="float-left">Nilai Disiplin</label>
                        <input type="number" class="form-control" id="dis" name="dis" max="5" value="<?php echo $data['dis']; ?>" required>
                    </div>
                    <input type="hidden" name="guru_id" value="<?php echo $data['guru_id']; ?>" />
                    <div class="modal-footer" style="align-items: center; justify-content: center;">
                        <button type="submit" name="submit" class="btn btn-primary">
                            Simpan
                        </button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>