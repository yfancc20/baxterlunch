<?php
	$topics = [
		[
			'title' => 'Why CRRT?',
			'name' => 'Prof. Mark Marshall'
		],
		[
			'title' => 'How to define clinical excellence of CRRT?',
			'name' => 'Prof. Ashita Tolwani'
		],
		[
			'title' => 'Future CRRT.',
			'name' => 'Prof. Patrick Honoré'
		],
		[
			'title' => 'Panel Discussion',
			'name' => 'ALL'
		],
	];
?>

<!DOCTYPE html>
<html>
<head>
	
<? require_once('components/head.php') ?>

<title>Baxter</title>

</head>
<body>
	<div class="wrapper agenda">
		<div class="content">
			<div class="paragraph">
				<div class="title-sm">The Journey to High Performance CRRT</div>
				<p class="text">Taipei Marriott Hotel 5F Junior Ballroom 1</p>
			</div>
		</div>

		<div class="banner">
			<div class="d-flex">
				<span class="title">AGENDA</span>
				<span class="title ml-auto">12:30-14:00</span>
			</div>
		</div>

		<div class="content">
			<div class="paragraph mt-0">
				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-3">
							<p class="text blue">Moderator</p>
						</div>
						<div class="col-9">
							<p class="text gray mb-0">Prof. Ravindra Mehta</p>
							<p class="text gray small">University of California, USA</p>

							<p class="text gray mb-0">Prof. Chih-Wei Yang</p>
							<p class="text gray small">Chang Gung University, ROC</p>
						</div>
					</div>
				</div>
			</div>

			<?
				for ($i=0; $i < count($topics); $i++) {
			?>
					<div class="dot-line"></div>
					<div class="paragraph">
						<div class="title-sm"><?=$topics[$i]['title']?></div>
						<div class="container-fluid px-0">
							<div class="row">
								<div class="col-3">
									<p class="text blue">Speaker</p>
								</div>
								<div class="col-9">
									<p class="text gray"><?=$topics[$i]['name']?></p>
								</div>
							</div>
						</div>
					</div>
			<?
				}
			?>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>