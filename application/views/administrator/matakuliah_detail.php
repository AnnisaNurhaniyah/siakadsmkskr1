<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-eye"></i> Detail Mata Kuliah
  </div>

  <table class="table table-striped table-bordered tabel-hover">

    <?php foreach($detail as $dt): ?>
      <tr>
        <th>Kode Mata Pelajaran</th>
        <td><?= $dt->kode_matakuliah; ?></td>
      </tr>
      <tr>
        <th>Nama Mata Pelajaran</th>
        <td><?= $dt->nama_matakuliah; ?></td>
      </tr>
      <tr>
        <th>Hari</th>
        <td><?= $dt->sks; ?></td>
      </tr>
      <tr>
        <th>Jam Pelajaran</th>
        <td><?= $dt->semester; ?></td>
      </tr>
      <tr>
        <th>Kelas</th>
        <td><?= $dt->nama_prodi; ?></td>
      </tr>
    <?php endforeach; ?>

  </table>
  <?= anchor('administrator/matakuliah', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>
  
</div>