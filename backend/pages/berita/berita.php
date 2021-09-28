<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="index.php?page=tambah_berita" class="btn btn-primary">+ &nbsp; Tambah Data </a> <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>NO.</th>
                    <th>JUDUL</th>
                    <th>FOTO</th>
                    <th>PENULIS</th>
                    <th>TANGGAL</th>
                    <th>DESKRIPSI</th>
                    <th>AKSI</th>
            
                    </tr>
                </thead>
                <tbody>

                <?php

                    include "config/koneksi.php";
                    $no=1;
                    $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC"); //ORDER BY untuk pengurutan dari DESC //DESC artinya ambil data dari id yang terbaru
                    while ($data = mysqli_fetch_array($query))
                    {

                ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['judul']  ?></td>
                    <td><img src="<?php echo '../assets/backend/img_berita/'.$data['foto']; ?>"  style="width: 5em"></td>
                    <td><?php echo $data['penulis'] ?></td>
                    <td><?php echo $data['tanggal'] ?></td>
                    <td><?= substr($data['deskripsi'],0,150)."...." ?></td>
                    <td>

                    <a href="index.php?page=edit_berita&id=<?php echo $data['id_berita'] ?>" class="btn btn-warning">Edit</a><br><br>
                    <a href="index.php?page=hapus_berita&id=<?php echo $data['id_berita'] ?>"  class="btn btn-danger" onclick="return confirm('Anda Yakin ingin hapus data ini?')"> Hapus</a>
                </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>