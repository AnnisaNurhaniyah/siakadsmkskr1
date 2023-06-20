<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Guru
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/dosen/tambah_dosen', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Guru</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>NIP</th>
      <th>NAMA GURU</th>
      <th>ALAMAT</th>
      <th>EMAIL</th>
      <th>MATA PELAJARAN</th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($dosen as $dsn): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $dsn->nidn; ?></td>
      <td><?= $dsn->nama_dosen; ?></td>
      <td><?= $dsn->alamat; ?></td>
      <td><?= $dsn->email; ?></td>
      <td><?= $dsn->matpel; ?></td>
      <td width="20px"><?= anchor('administrator/dosen/detail/'.$dsn->nidn, '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/dosen/update/'.$dsn->nidn, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/dosen/delete/'.$dsn->nidn, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>