<?php
	$prev = 'speaker1-1.php';

	$name = 'Prof. Mark Marshall';
	$exp2 = [
		'title' => 'Academic/Professional Experience',
		'items' => [
			'2008 – 2013, Committee Member, Haemodialysis Working Group, the Australian and New Zealand Dialysis and Transplant Registry',
			'2014 – current, Adjunct Associate Professor, Faculty of Medicine and Health Sciences, University of Auckland',
			'2001 – 2012, Honorary Clinical Senior Lecturer in Medicine, Faculty of Medicine and Health Sciences, University of Auckland',
		]
	];
	$exp3 = [
		'title' => 'Education',
		'items' => [
			'1979 – 1983, Auckland Boys Grammar School, Epsom, Auckland, New Zealand',
			'2004 – 2010, University of Auckland, Faculty of Medicine and Health Sciences, School of Population Health',
			'1998 – 2000, Nephrology Fellow, Division of Nephrology, Department of Internal Medicine, University of Arkansas for Medical Sciences.',
			'1990 – 1997, Northern Clinical Training Network/Royal Australasian College of Physicians.',
			'1984 – 1990, University of Auckland, Faculty of Medicine and Health Sciences.'
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
			<div class="paragraph mt-3">
				<h1 class="title-sm mb-0"><?=$exp3['title']?></h1>
				<? foreach ($exp3['items'] as $item) { ?>
					<table>
						<tr>
							<td class="list text-sm blue">●</td>
							<td><p class="text-sm blue mb-0 font-weight-bold"><?=$item?></p></td>
						</tr>
					</table>
				<? } ?>
			</div>
			<div class="speaker-cv text-right">
				<a href="speaker_cv.php">
					<img src="/img/button-cv.png">
				</a>
			</div>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>