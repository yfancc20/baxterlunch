<?php
	$prev = 'speaker_cv.php';
	$next = 'speaker2-2.php';

	$name = 'Prof. Ashita Tolwani';
	$exp1 = [
		'title' => 'Society Memberships',
		'items' => [
			'American Society of Nephrology',
			'International Society for Peritoneal Dialysis',
			'International Society of Nephrology',
			'National Kidney Foundation',
			'Southern Society of Clinical Investigation',
		]
	];
	$exp2 = [
		'title' => 'Honors',
		'items' => [
			'2003-2011, 2013-2014 UAB Department of Medicine\'s Top Ten Teacher Award for Excellence in Teaching',
			'2004-2006, 2008-2014, UAB Department of Medicine\'s C. Glenn Cobbs, MD-Edwin A. Rutsky, MD Award for Clinical Excellence',
			'2005-2006, Consumers\' Research Council of America\'s "America\'s Top Physicians"',
			'5/2007, UAB Argus Award for Excellence in Teaching, University of Alabama School of Medicine Class of 2008',
			'2007-2014, Best Doctors in America',
			'4/2008, UAB Argus Award for Best Lecturer in Urinary/Renal Correlative Pathology for Class of 2009',
			'3/2009, UAB Argus Award for Best Lecturer in Urinary/Renal Correlative Pathology for Class of 2010',
			'3/2009, UAB Argus Award for Best Lecturer for the Renal Modulefor the Class of 2011'
		]
	];

?>

<!DOCTYPE html>
<html>
<head>
	
<? require_once('components/head.php') ?>

<title>Baxter</title>

</head>
<body>
	<div class="wrapper speaker-each">
		<? require_once('components/speaker_top.php'); ?>

		<div class="banner">
			<span class="title"><?=$name?></span>
		</div>

		<div class="content">
			<div class="paragraph mt-2">
				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-8 pr-0">
							<h1 class="title-sm mb-0"><?=$exp1['title']?></h1>
							<? foreach ($exp1['items'] as $item) { ?>
								<table>
									<tr>
										<td class="list text-sm blue">●</td>
										<td><p class="text-sm blue mb-0 font-weight-bold"><?=$item?></p></td>
									</tr>
								</table>
							<? } ?>
						</div>
						<div class="col-4 px-0">
							<div class="photo">
								<img src="/img/prof_2.jpg" class="w-100">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="paragraph mt-3">
				<h1 class="title-sm mb-0"><?=$exp2['title']?></h1>
				<? foreach ($exp2['items'] as $item) { ?>
					<table>
						<tr>
							<td class="list text-sm blue">●</td>
							<td><p class="text-sm blue mb-0 font-weight-bold"><?=$item?></p></td>
						</tr>
					</table>
				<? } ?>
			</div>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>