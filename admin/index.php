<?php 
	require_once 'header.php' 
?>

	<div class="content">
		<div class="container">
			
			<h3 class="page-title">Beranda</h3>

			<div class="card">
				<h2>Hai <?= $_SESSION['uname']?>,</h2>
				<p>Admin Selamat Datang di Wedangan Pembalap</p>
			</div>

		</div>
	</div>

<?php require_once 'footer.php'?>