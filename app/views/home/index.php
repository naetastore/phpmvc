<!-- Page Vendor -->

</head>
<body>
	<!-- Container -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6">
				<h1><?= $data['title'] ?></h1>
                <?php Flasher::flash(); ?>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-lg-6">
				<button type="button" class="btn btn-primary tampilModalTambah" data-toggle="modal" data-target="#formModal">
					Tambah Data Mahasiswa
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<form action="<?= BASEURL; ?>/home/cari" method="post">
					<div class="input-group mb-3">
						<input autocomplete="off" type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword">
						<div class="input-group-append">
							<button type="submit" class="btn btn-primary" id="tombolCari">Cari</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<?php foreach($data['mhs'] as $mhs) : ?>
					<ul class="list-group">
						<li class="list-group-item">
                            <?= $mhs['nama'] ?>
							<a href="<?= BASEURL . '/home/detail/' . $mhs['id'] ?>" class="badge badge-primary float-right ml-1">detail</a>
							<a href="#" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id=<?= $mhs['id'] ?>>ubah</a>
							<a href="<?= BASEURL . '/home/remove/' . $mhs['id'] ?>" onclick="return confirm('yakin')" class="badge badge-danger float-right mr-1">remove</a>
						</li>
					</ul>
				<?php endforeach; ?>
			</div>
		</div>
	<!-- End Container -->
	</div>

	<!-- Modal Form -->
	<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="FormModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			<form action="<?= BASEURL; ?>/home/tambah" method="post">
				<input id="id" name="id" type="text" type="text" hidden>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="npm">NPM</label>
					<input type="text" class="form-control" id="npm" name="npm">
				</div>		
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>		
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select class="form-control" id="jurusan" name="jurusan">
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Manajemen Informatika">Manajemen Informatika</option>
					</select>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
			</form>

			</div>
		</div>
	<!-- End Modal -->
	</div>