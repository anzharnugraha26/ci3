<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<main>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<a href="<?php echo base_url('Welcome/formInput') ?>" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
					<table class="table table-striped">
						<tr>
							<td>No</td>
							<td>Nim</td>
							<td>Nama Mahasiswa</td>
							<td>Jurusan</td>
							<td>Option</td>
						</tr>

						<?php
						$count = 0;
						foreach ($data_mhs as $row) {
							$count = $count + 1;
						?>
							<tr>
								<td><?php echo $count ?></td>
								<td><?php echo $row->nim ?></td>
								<td><?php echo $row->nama ?></td>
								<td><?php echo $row->jurusan ?></td>
								<td>
									<a href="<?php echo base_url('Welcome/formEdit/') . $row->id ?>" class="btn btn-primary">edit</a>
									<a href="<?php echo base_url('Welcome/delete/') . $row->id ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
								</td>
							</tr>
						<?php 	} ?>
					</table>
				</div>
			</div>
		</div>
	</main>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>
