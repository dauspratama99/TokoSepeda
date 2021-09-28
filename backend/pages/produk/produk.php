<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <a href="index.php?page=tambah_produk" class="btn btn-primary">+ &nbsp; Tambah Data </a> <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>NO.</th>
                    <th>NAMA PRODUK</th>
                    <th>GAMBAR</th>
                    <th>DESKRIPSI</th>
                    <th>Aksi</th>
            
                    </tr>
                </thead>
                <tbody>

                <?php

                    include "config/koneksi.php";
                    $no=1;
                    $query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC"); //ORDER BY untuk pengurutan dari DESC //DESC artinya ambil data dari id yang terbaru
                    while ($data = mysqli_fetch_array($query))
                    {

                ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_produk']  ?></td>
                    <td><img src="<?php echo '../assets/backend/img_produk/'.$data['gambar']; ?>"  style="width: 5em"></td>
                    <td><?php echo $data['deskripsi'] ?></td>
                    <td>

                    <a href="index.php?page=edit_produk&id=<?php echo $data['id_produk'] ?>" class="btn btn-warning">Edit</a><br><br>
                    <a href="index.php?page=hapus_produk&id=<?php echo $data['id_produk'] ?>"  class="btn btn-danger" onclick="return confirm('Anda Yakin ingin hapus data ini?')"> Hapus</a>
                </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>