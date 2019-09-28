<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal">
            Tambah Data
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/search" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" id="dicari">Cari</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs) : ?>
                <li class="list-group-item "> <?= $mhs['nama']; ?> 
                    <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2"
                    onclick="return confirm('Apakah Anda ingin hapus?'); ">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-2 ubahModal" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-2">detail</a>
                </li>
                <?php endforeach; ?>
                </ul>
                
            
            
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ; ?>/mahasiswa/tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" >
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" placeholder="123456">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option>Teknik Informatika</option>
                <option>Akuntansi</option>
                <option>Matematika</option>
                <option>Agribisnis</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
      </div>
    </div>
  </div>
</div>