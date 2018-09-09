<?php

	$speakers = [
		[
			'name' => 'Prof. Mark Marshall',
			'experience' => 'Asia Pacific Baxter Healthcare'
		],
		[
			'name' => 'Prof. Ashita Tolwani',
			'experience' => 'University of Alabama Birmingham, USA'
		],
		[
			'name' => 'Prof. Patrick Honoré',
			'experience' => 'Brugmann University Hospital, Belgium'
		],
		[
			'name' => 'Dr. Ling Zhang',
			'experience' => 'Department of Nephrology, <br> West China Hostpital of Sichuan University'
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
	<div class="wrapper speaker">
		<? require_once('components/speaker_top.php'); ?>

		<div class="banner">
			<span class="title">SPEAKER CV</span>
		</div>

		<div class="content">
			<?php foreach ($speakers as $speaker) { ?>
				<div class="paragraph mt-3">
					<h1 class="title-md mb-0"><?=$speaker['name']?></h1>
					<p class="text-sm blue mb-0"><?=$speaker['experience']?></p>
				</div>
				<div class="container-fluid bottom-line">
					<div class="row">
						<div class="col-9">
							<div class="dot-line-green"></div>
						</div>
						<div class="col-3 more px-0">
							<img src="img/button-more.png">
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>