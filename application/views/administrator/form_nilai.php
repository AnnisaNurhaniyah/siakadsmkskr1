<?php
$nilai = get_instance();
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');
?>

<div class="container-fluid">
  <?php
  if($list_nilai == null){
    $thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
    $semester = $thn->semester == 1;

    if($semester == 1){
      $tampilSemester = "Ganjil";
    }
    else{
      $tampilSemester = "Genap";
    }
  ?>

  <div class="alert alert-danger">
    Maaf, kode mata pelajaran yang anda input <strong>TIDAK TERSEDIA</strong> di tahun ajaran <?= $thn->tahun_akademik . " (" . $tampilSemester . ")"; ?>
  </div>

  <?= anchor('administrator/nilai/input_nilai', '<div class="btn btn-sm btn-primary">Kembali</div>'); ?>

  <?php
  }
  else{ ?>

  <center>
    <legend><strong>MASUKKAN NILAI</strong></legend>

    <table>
      <tr>
        <td>Kode Mata Pelajaran</td>
        <td>: <?= $kode_matakuliah; ?></td>
      </tr>
      <tr>
        <td>Nama Mata Pelajaran</td>
        <td>: <?= $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah; ?></td>
      </tr>
      <?php
      $thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
      $semester = $thn->semester == "Ganjil";
      if($semester == "Ganjil"){
        $tampilSemester = "Ganjil";
      }
      else{
        $tampilSemester = "Genap";
      }
      ?>
      <tr>
        <td>
          Tahun Akademik (Semester)
          <td>: <?= $thn->tahun_akademik . " (" . $tampilSemester . ")"; ?></td>
        </td>
      </tr>
    </table>
  </center>

  <form action="<?= base_url('administrator/nilai/simpan_nilai') ?>" method="post">
    <table class="table table-striped table-hover table-bordered mt-3">
      <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA SISWA</th>
        <th>PENGETAHUAN</th>
        <th>KETERAMPILAN</th>
        <th>NILAI AKHIR</th>
        <th>PREDIKAT</th>
      </tr>

      <?php
      $no = 1;
      foreach($list_nilai as $row): ?>
      <tr>
        <td width="25px;"><?= $no++; ?></td>
        <td><?= $row->nim; ?></td>
        <td><?= $row->nama_lengkap; ?></td>
        <input type="hidden" name="id_krs[]" value="<?= $row->id_krs; ?>">
        <td width="25px;">
          <input type="text" name="nilai[]" class="form-control" value="<?= $row->nilai; ?>">
        </td>
        <td width="25px;">
          <input type="text" name="nilai[]" class="form-control" value="<?= $row->nilai; ?>">
        </td>
        <td width="25px;">
          <input type="text" class="form-control">
        </td>
        <td width="25px;">
          <input type="text" class="form-control">
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>

  <?php } ?>


</div>