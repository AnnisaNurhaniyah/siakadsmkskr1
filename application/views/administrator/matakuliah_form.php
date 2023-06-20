<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Mata Pelajaran
  </div>
  <form action="<?= base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>" method="post">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Kode Mata Pelajaran</label>
            <input type="text" name="kode_matakuliah" class="form-control">
            <?= form_error('kode_matakuliah', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Nama Mata Pelajaran</label>
            <input type="text" name="nama_matakuliah" class="form-control">
            <?= form_error('nama_matakuliah', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Hari</label>
            <input type="text" name="sks" class="form-control">
            <?= form_error('sks', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Jam Pelajaran</label>
            <input type="text" name="semester" class="form-control">
            <?= form_error('semester', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <select name="nama_prodi" id="" class="form-control">
              <option value="">--Pilih Kelas--</option>
              <?php foreach($prodi as $prd): ?>
                <option value="<?= $prd->nama_prodi; ?>"><?= $prd->nama_prodi; ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('nama_prodi', '<div class="text-danger small">', '</div>'); ?>
          </div>
      
          <button type="submit" class="btn btn-primary mb-4">Simpan</button>
        </div>
    </div>
  </form>
</div>