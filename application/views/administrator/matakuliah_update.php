<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-edit"></i> Form Edit Mata Pelajaran
  </div>

  <?php foreach($matakuliah as $mk): ?>
    <form action="<?= base_url('administrator/matakuliah/update_aksi') ?>" method="post">

      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="">Nama Mata Pelajaran</label>
            <input type="hidden" name="kode_matakuliah" class="form-control" value="<?= $mk->kode_matakuliah ?>">
            <input type="text" name="nama_matakuliah" class="form-control" value="<?= $mk->nama_matakuliah ?>">
          </div>
          <div class="form-group">
            <label for="">Hari</label>
            <input type="text" name="sks" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jam Pelajaran</label>
            <input type="text" name="semester" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <select name="nama_prodi" id="" class="form-control">
              <option><?= $mk->nama_prodi; ?></option>
              <?php foreach($prodi as $prd): ?>
                <option value="<?= $prd->nama_prodi; ?>"><?= $prd->nama_prodi; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

        </div>
      </div>

    </form>
  <?php endforeach; ?>
  
</div>