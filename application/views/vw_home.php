<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Home Page
			</div>
			<div class="card-body">
				<center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center>
				<hr/>
				<a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
			</div>
		</div>
	</div>		
	</body>
</html>
