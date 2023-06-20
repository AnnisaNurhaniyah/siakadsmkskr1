<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat datang <strong><?= $username; ?></strong> di Sistem Informasi Akademik SMK Sangkuriang 1 Cimahi, anda login sebagai <strong><?= $level; ?></strong></p>
    <hr>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-cogs"></i>  Control Panel
    </button>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>  Control Panel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/mahasiswa'); ?>"><p class="nav-link small text-info">SISWA</p></a>
              <i class="fas fa-3x fa-user-graduate"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/tahun_akademik'); ?>"><p class="nav-link small text-info">TAHUN AKADEMIK</p></a>
              <i class="fas fa-3x fa-calendar-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/matakuliah'); ?>"><p class="nav-link small text-info">MATA PELAJARAN</p></a>
              <i class="fas fa-3x fa-edit"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/nilai'); ?>"><p class="nav-link small text-info">NILAI</p></a>
              <i class="fas fa-3x fa-file-alt"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/informasi'); ?>"><p class="nav-link small text-info">INFO SEKOLAH</p></a>
              <i class="fas fa-3x fa-bullhorn"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/identitas'); ?>"><p class="nav-link small text-info">IDENTITAS</p></a>
              <i class="fas fa-3x fa-id-card-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/tentang_kampus'); ?>"><p class="nav-link small text-info">TENTANG SEKOLAH</p></a>
              <i class="fas fa-3x fa-info-circle"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url('administrator/hubungi_kami'); ?>"><p class="nav-link small text-info">Pesan User</p></a>
              <i class="fas fa-3x fa-laptop"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>