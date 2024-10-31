<!-- Modal Add -->
<div id="modal-add-user" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahData">
                    Tambah Data User
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-karyawan" class="form-floating" action="./process/input-user.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_pengguna" class="float-left">Nama User</label>
                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
                    </div>
                    <div class="form-group">
                        <label for="username" class="float-left">Username</label>
                        <input type="text" class="form-control" id="username" name="username" maxlength="18" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="float-left">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
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
<div id="modal-edit-user<?php echo $data['pengguna_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahData">
                    Edit Data User
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-karyawan" class="form-floating" action="./process/edit-user.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_pengguna" class="float-left">Nama User</label>
                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $data['nama_pengguna'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username" class="float-left">Username</label>
                        <input type="text" class="form-control" id="username" name="username" maxlength="18" value="<?php echo $data['nama_pengguna'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="float-left">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['nama_pengguna'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="inputGroupFile04" class="float-left">Unggah Foto</label>
                        <input type="file" class="form-control" id="inputGroupFile04" name="profile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept="image/*" onchange="previewImage(event)">
                        <img id="preview_edit" src="./images/guru/<?php echo $data['profile']; ?>" alt="Preview Gambar" class="rounded-circle" style="margin-top:5px; display: block; max-width: 100px; height: 100px; object-fit: cover; border-radius: 100px;">
                    </div>
                    <input type="hidden" name="pengguna_id" value="<?php echo $data['pengguna_id']; ?>" />
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