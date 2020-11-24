<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->view("component/head.php") ?>
  </head>
  <body > 

    <?php $this->load->view("component/navbar.php") ?>
    <div class="container mt-5" >
		<form action="#" method="post">
        <input type="hidden" value="<?= $mobil['id']; ?>" name="id">
			<table class="table table-striped table-bordered" width="250px">
				<thead>
					<tr class="text-center bg-secondary">
						<th scope="col" colspan="2" style="color:white;">Ubah Data Mobil</th>
					</tr>
				</thead>
				<tbody>
                
					<tr>
						<td>Merk</td>
						<td>
							<input class="form-control" type="text" name="merk" placeholder="Masukkan Merk Kendaraan"  id="merk" value="<?= $mobil['merk']; ?>">
						</td>
					</tr>
					<tr>
						<td>Warna</td>
						<td>
							<input class="form-control" type="text" name="warna" placeholder="Masukkan Warna Kendaraan"  id="warna" value="<?= $mobil['warna']; ?>">
						</td>
					</tr>
					<tr>
						<td>No. Polisi</td>
						<td>
							<input class="form-control" type="text" name="nopol" placeholder="Masukkan No. Polisi Kendaraan"  id="nopol" value="<?= $mobil['nopol']; ?>">
						</td>
					</tr>
				</tbody>
			</table>
			<div >
				<button type="submit" name="tambah" class="btn btn-success float-right" >Simpan</button>
			</div>
		</form>
    </div>

    <?php $this->load->view("component/footer.php") ?>
    <?php $this->load->view("component/js.php") ?>
    
  </body>
</html>