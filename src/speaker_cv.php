<?php
	$prev = 'menu.php';

	$speakers = [
		[
			'name' => 'Prof. Mark Marshall',
			'experience' => 'Asia Pacific Baxter Healthcare',
			'link' => 'speaker1-1.php'
		],
		[
			'name' => 'Prof. Ashita Tolwani',
			'experience' => 'University of Alabama Birmingham, USA',
			'link' => 'speaker2-1.php'
		],
		[
			'name' => 'Prof. Patrick Honoré',
			'experience' => 'Brugmann University Hospital, Belgium',
			'link' => 'speaker3-1.php'
		],
		[
			'name' => 'Dr. Ling Zhang',
			'experience' => 'Department of Nephrology, <br> West China Hostpital of Sichuan University',
			'link' => 'speaker4-1.php'
		],
	];
?>

<!DOCTYPE html>
<html>
<head>
	
<?php include_once 'components/head.php'; ?>

<title>Baxter</title>

</head>
<body>
	<div class="wrapper speaker">
		<?php include_once 'components/speaker_top.php'; ?>

		<div class="banner">
			<span class="title">SPEAKER CV</span>
		</div>

		<div class="content">
			<?php foreach ($speakers as $speaker) { ?>
				<div class="paragraph mt-3">
					<h1 class="title-md mb-0"><?php echo $speaker['name']?></h1>
					<p class="text-sm blue mb-0"><?php echo $speaker['experience']?></p>
				</div>
				<div class="container-fluid bottom-line">
					<div class="row">
						<div class="col-9">
							<div class="dot-line-green"></div>
						</div>
						<div class="col-3 more px-0">
							<a href="<?php echo $speaker['link']?>">
								<img src="img/button-more.png">
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<?php include_once 'components/footer.php'; ?>
</body>
</html>