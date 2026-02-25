<?php
$qProfile = "SELECT * FROM profile LIMIT 1";
$resultProfile = mysqli_query($connect, $qProfile);
$profile = mysqli_fetch_object($resultProfile);

// DETEKSI HALAMAN & KATEGORI AKTIF
$currentPage   = basename($_SERVER['PHP_SELF']);
$kategoriAktif = $_GET['kategori'] ?? '';
?>

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

/* ================= NAVBAR BACKGROUND ================= */
.custom-navbar {
    background-color: #3f6b57 !important; /* GANTI WARNA DI SINI */
}

/* BRAND */
.custom-navbar .navbar-brand {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 22px;
    color: #ffffff !important;
}

/* MENU */
.custom-navbar .nav-link {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 15px;
    color: #ffffff !important;
    transition: 0.3s ease;
}

/* HOVER */
.custom-navbar .nav-link:hover {
    color: #f8d7a3 !important;
}

/* ACTIVE */
.custom-navbar .nav-link.active {
    font-weight: 600;
    color: #f8d7a3 !important;
    border-bottom: 2px solid #f8d7a3;
}

</style>

<nav class="custom-navbar navbar navbar-expand-md navbar-dark" aria-label="Azmia navigation bar">
	<div class="container">

		<!-- BRAND + LOGO -->
		<a class="navbar-brand d-flex align-items-center" href="index.php">
			
			<?php if (!empty($profile->logo)) : ?>
				<img src="../storages/profile/<?= $profile->logo ?>" 
					 alt="Logo"
					 style="height:40px; width:auto; margin-right:10px;">
			<?php endif; ?>

			<span>
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
					<a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="#hero_full">
						Home
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($currentPage == 'katalog.php' && empty($kategoriAktif)) ? 'active' : '' ?>" href="#populer_product">
						Katalog
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($kategoriAktif == 'idul_fitri') ? 'active' : '' ?>" href="katalog.php?kategori=idul_fitri">
						Idul Fitri
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($kategoriAktif == 'lamaran') ? 'active' : '' ?>" href="lamaran.php?kategori=lamaran">
						Lamaran
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($kategoriAktif == 'ulang_tahun') ? 'active' : '' ?>" href="katalog.php?kategori=ulang_tahun">
						Ulang Tahun
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link <?= ($currentPage == 'social_media.php') ? 'active' : '' ?>" href="social_media.php">
						Social Media
					</a>
				</li>

			</ul>
		</div>
	</div>
</nav>