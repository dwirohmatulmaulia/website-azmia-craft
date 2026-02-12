<?php   
$profile = "SELECT * FROM profile";
$resultprofile = mysqli_query($connect, $profile) or die(mysqli_error($connect));
?>

<div class="hero">
				<div class="container">
                     <?php while ($item = $resultprofile->fetch_object()): ?>
					<div class="row justify-content-between">

						<div class="col-lg-5">
							<div class="intro-excerpt">
								 <img 
                        src="../storages/profile/<?= $item->logo ?>" 
                        alt="<?= $item->nama ?>">
                         <img 
                        src="../storages/profile/<?= $item->banner ?>" 
                        alt="<?= $item->nama ?>">

								<p class="mb-4"><?= $item->nama ?></p>
								<p class="mb-4"><?= $item->deskripsi ?></p>
							</div>
						</div>
					</div>
				</div>
                <?php endwhile; ?>
			</div>