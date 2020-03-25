<!-- Page Vendor -->

</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<h1><?= $data['title'] ?></h1>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<p class="card-title"><?= $data['mhs']['nama'] ?></p>
						<p class="text-muted"><?= $data['mhs']['npm'] ?></p>
						<p><?= $data['mhs']['email'] ?></p>
						<p><?= $data['mhs']['jurusan'] ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-lg-6">
				<a href="<?= BASEURL; ?>/home" class="btn btn-primary">
					Kembali
				</a>
			</div>
		</div>
	</div>