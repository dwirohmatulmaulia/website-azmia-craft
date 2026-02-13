<?php
$qProfile = "SELECT * FROM profile LIMIT 1";
$resultProfile = mysqli_query($connect, $qProfile);
$profile = mysqli_fetch_object($resultProfile);
?>

<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Azmia navigation bar">
	<div class="container">

		<!-- BRAND + LOGO -->
		<a class="navbar-brand d-flex align-items-center" href="index.php">
			
			<?php if (!empty($profile->logo)) : ?>
				<img src="../storages/profile/<?= $profile->logo ?>" 
					 alt="Logo"
					 style="height:40px; width:auto; margin-right:10px;">
			<?php endif; ?>

			<span class="fw-bold">
				<?= $profile->nama ?? 'Azmia Craft' ?>
			</span>
		</a>

		<button class="navbar-toggler" type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarsAzmia"
			aria-controls="navbarsAzmia"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsAzmia">
			<ul class="navbar-nav ms-auto mb-2 mb-md-0">

				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="katalog.php">Katalog</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="katalog.php?kategori=idul_fitri">Idul Fitri</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="katalog.php?kategori=lamaran">Lamaran</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="katalog.php?kategori=ulang_tahun">Ulang Tahun</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="social_media.php">Social Media</a>
				</li>

			</ul>
		</div>
	</div>
</nav>
