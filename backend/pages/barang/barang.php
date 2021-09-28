 <div class="container-fluid">
                        <h1 class="mt-4">Data Barang</h1>
                    
            
 <div class="card-body">
<div class="table-responsive">
     <a href="index.php?page=tambah_barang" class="btn btn-danger">+ &nbsp; Tambah Data </a>
  <br>
  <br>  
  <table class="table table-bordered table-striped">
         <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>harga</th>
            <th>Aksi</th>
        </tr>

        <?php
       
           $no = 1; 
            $tampil = mysqli_query($koneksi, "SELECT * from tb_barang order by id_barang desc");
            while($data = mysqli_fetch_array($tampil)) {

        ?>        
        <tr>
            <td><?php echo $no++  ?></td>
            <td><?php echo $data['nama_barang']  ?></td>
            <td><?php echo $data['jumlah']  ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td>

                <a href="index.php?page=edit_barang&id=<?php echo $data['id_barang'] ?>" class="btn btn-warning">Edit</a>
               <a href="index.php?page=hapus_barang&id=<?php echo $data['id_barang'] ?>"  class="btn btn-danger" onclick="return confirm('Anda Yakin ingin hapus data ini?')"> Hapus</a>
            </td>
        </tr>
        <?php } ?>
      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
             