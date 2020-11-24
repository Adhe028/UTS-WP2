<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->view("component/head.php") ?>
  </head>
  <body > 

    <?php $this->load->view("component/navbar.php") ?>
    <div class="container mt-5" >

        <a href="<?= site_url('mobil_c/tambah'); ?>" class="btn btn-dark mb-2">Tambah Data</a>
        <table class="table table-striped table-bordered" > 
            <thead>
            <tr class=" bg-secondary">
                <th class="text-center" scope="col" style="color:white;">No</th>
                <th class="text-center" scope="col" style="color:white;">Merk</th>
                <th class="text-center" scope="col" style="color:white;">Warna</th>
                <th class="text-center" scope="col" style="color:white;">No. Polisi</th>
                <th class="text-center" scope="col" style="color:white;" colspan="2">Opsi</th>
            </tr>
            </thead>
            <tbody>
                
            <?php 
            $no=1;
            foreach ($mobil as $m) : ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $m['merk']; ?></td>
                    <td><?= $m['warna']; ?></td>
                    <td><?= $m['nopol']; ?></td>
                    <td class="text-center"> <button class="btn btn-warning btn-sm" type="submit"><a href="<?= site_url('mobil_c/ubah/'); ?><?= $m['id']; ?>" style="color:white;text-decoration:none; ">Ubah</a></button></td>
                    <td class="text-center"> <button class="btn btn-danger btn-sm" type="submit" ><a href="<?= site_url('mobil_c/hapus/'); ?><?= $m['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin menghapus data ini?');" style="color:white;text-decoration:none; ">Hapus</a></button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

    <?php $this->load->view("component/footer.php") ?>
    <?php $this->load->view("component/js.php") ?>
    
  </body>
</html>