<!-- Modal Add -->
<div id="modal-add-guru" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahData">
                    Tambah Data Guru
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-karyawan" class="form-floating" action="./process/input-guru.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_guru" class="float-left">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
                    </div>
                    <div class="form-group">
                        <label for="nip" class="float-left">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" maxlength="18" required>
                    </div>
                    <div class="form-group">
                        <label for="jk_guru" class="float-left">Jenis Kelamin</label>
                        <select class="form-control" id="jk_guru" name="jk_guru" required>
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nmr_guru" class="float-left">Nomor Telephone</label>
                        <input type="tel" class="form-control" id="nmr_guru" name="nmr_guru" maxlength="13" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_guru" class="float-left">Alamat</label>
                        <input type="text" class="form-control" id="alamat_guru" name="alamat_guru" required>
                    </div>
                    <div class="form-group">
                        <label for="inputGroupFile04" class="float-left">Unggah Foto</label>
                        <input type="file" class="form-control" id="inputGroupFile04" name="profile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*" onchange="previewImage(event)">
                        <img id="preview" src="" alt="Preview Gambar" class="rounded-circle" style="margin-top:5px; display: none; max-width: 100px; height: 100px; object-fit: cover; border-radius: 100px">
                    </div>
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

<!-- Modal Edit -->
<div id="modal-edit-guru<?php echo $data['guru_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahData">
                    Edit Data Guru
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-karyawan" class="form-floating" action="./process/edit-guru.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_guru" class="float-left">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nip" class="float-left">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" maxlength="18" value="<?php echo $data['nip']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jk_guru" class="float-left">Jenis Kelamin</label>
                        <select class="form-control" id="jk_guru" name="jk_guru" required>
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki" <?php echo ($data['jk_guru'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php echo ($data['jk_guru'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nmr_guru" class="float-left">Nomor Telephone</label>
                        <input type="tel" class="form-control" id="nmr_guru" name="nmr_guru" maxlength="13" value="<?php echo $data['nmr_guru']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_guru" class="float-left">Alamat</label>
                        <input type="text" class="form-control" id="alamat_guru" name="alamat_guru" value="<?php echo $data['alamat_guru']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="inputGroupFile04" class="float-left">Unggah Foto</label>
                        <input type="file" class="form-control" id="inputGroupFile04" name="profile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*" onchange="previewImage(event)">
                        <img id="preview_edit" src="./images/guru/<?php echo $data['profile']; ?>" alt="Preview Gambar" class="rounded-circle" style="margin-top:5px; display: block; max-width: 100px; height: 100px; object-fit: cover; border-radius: 100px;">
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