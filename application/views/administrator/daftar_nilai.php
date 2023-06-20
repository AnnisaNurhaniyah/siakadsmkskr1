<?php
$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('mahasiswa_model');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');

$krs = $nilai->krs_model->get_by_id($id_krs[0]);
$kode_matakuliah = $krs->kode_matakuliah;
$id_thn_akad = $krs->id_thn_akad;

?>

<div class="container-fluid">
  <div class="alert alert-success">
    <i class="fas fa-university"></i> DAFTAR NILAI SISWA
  </div>

  <center>
    <legend><strong>DAFTAR NILAI SISWA</strong></legend>
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
      $semester = $thn->semester == 1;

      if($semester){
        $tampilSemester = "Ganjil";
      }
      else{
        $tampilSemester = "Genap";
      }
      ?>

      <tr>
        <td>Tahun Akademik (Semester)</td>
        <td>: <?= $thn->tahun_akademik . " (" . $tampilSemester . ")"; ?></td>
      </tr>
    </table>
  </center>

  <table class="table table-hover table-borderd table-striped mt-3">
    <tr>
      <td>NO</td>
      <td>NIS</td>
      <td>NAMA LENGKAP</td>
      <th>PENGETAHUAN</th>
      <th>KETERAMPILAN</th>
      <th>NILAI AKHIR</th>
      <th>PREDIKAT</th>
    </tr>

    <?php
    $no = 1;
    
    for($i=0; $i<sizeof($id_krs); $i++){ ?>

    <tr>
      <td><?= $no++; ?></td>
      <?php $nim = $nilai->krs_model->get_by_id($id_krs[$i])->nim; ?>
      <td><?= $nim; ?></td>
      <td><?= $nilai->mahasiswa_model->get_by_id($nim)->nama_lengkap; ?></td>
      <td><?= $nilai->krs_model->get_by_id($id_krs[$i])->nilai; ?></td>
      <td><?= $nilai->krs_model->get_by_id($id_krs[$i])->nilai; ?></td>
      <td><?= $nilai->krs_model->get_by_id($id_krs[$i])->nilai; ?></td>
      <td><?= $nilai->krs_model->get_by_id($id_krs[$i])->nilai; ?></td>
    </tr>

    <?php } ?>
  </table>
</div>