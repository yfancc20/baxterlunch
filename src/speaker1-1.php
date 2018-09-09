<?php
	$name = 'Prof. Mark Marshall';
	$exp1 = [
		'items' => [
			'Department of Renal Medicine, Middlemore Hospital, Otahuhu, Auckland, New Zealand',
			'Adjunct Associate Professor, Faculty of Medicine and Health Sciences, University of Auckland',
			'Director of Medical Affairs, Renal – Asia Pacific Baxter HealthCare Ltd',

		]
	];
	$exp2 = [
		'title' => 'Academic/Professional Experience',
		'items' => [
			'2014 – current, Adjunct Associate Professor, Faculty of Medicine and Health Sciences, University of Auckland',
			'2012 – 2014, Honourary Associate Professor, Faculty of Medicine and Health Sciences, University of Auckland',
			'2001 – 2012, Honorary Clinical Senior Lecturer in Medicine, Faculty of Medicine and Health Sciences, University of Auckland',
			'2010 – current, Editorial Board, Nephrology (Carlton)',
			'2010 – 2014, Chair, NZ Chapter of the Australian and New Zealand Society of Nephrology',
			'2010 – 2014, Chair, National (NZ) Renal Advisory Board, Ministry of Health',
			'2010 – 2014, Council Member, Australian and New Zealand Society of Nephrology (www.nephrology.edu.au/committees/coucil.)',
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
			<div class="paragraph mt-1">
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
								<img src="/img/prof_1.jpg" class="w-100">
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