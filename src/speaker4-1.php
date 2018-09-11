<?php
	$prev = 'speaker_cv.php';
	$next = 'speaker4-2.php';
	$topDisplay = [false, true];
	
	$name = 'Dr. Ling Zhang, MD';
	$desc = 'Associate professor, Director of CRRT,<br>Department of nephrology, West China Hospital of Sichuan University';
	$exp1 = [
		'title' => 'Positions and Major Appointments',
		'items' => [
			'2004-2007: Resident, Department of internal medicine, West China Hospital of Sichuan University',
			'2007-2009: Resident, Department of nephrology, West China Hospital of Sichuan University',
			'2010-2014: Lecturer, in charge of CRRT, Department of nephrology, West China Hospital of Sichuan University',
			'2015-now: Associate professor, director of CRRT, Department of nephrology, West China Hospital of Sichuan University',
		]
	];
	$exp2 = [
		'title' => 'Attending International Conference',
		'items' => [
			'Invited speaker, Monitoring, alarms and connections with other therapies; Managing Heart Failure and Cardio-renal Syndrome. 1st Asia Pacific AKI & CRRT 2017, Malaysia.',
			'Invited speaker, Blood purification for crush syndrome: local experience in Wenchuan earthquake. Looking Forword From Wenchuan: Collaboration, Training and Disaster Management Symposium 2012. University of Massachusetts Medical School, Boston, USA. 2013, April 23-26.'
		]
	];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
<?php include_once 'components/head.php'; ?>

<title>Baxter</title>

</head>
<body>
	<div class="wrapper speaker-each">
		<?php include_once 'components/speaker_top.php'; ?>

		<div class="banner">
			<span class="title"><?php echo $name?></span>
		</div>

		<div class="content">
			<div class="paragraph mt-2">
				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-8 pr-0">
							<p class="text-sm blue"><?php echo $desc?></p>
							<h1 class="title-sm mb-0"><?php echo $exp1['title']?></h1>
						</div>
						<div class="col-4 px-0">
							<div class="photo">
								<img src="/img/prof_4.jpg" class="w-100">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="paragraph mt-0">
				<?php foreach ($exp1['items'] as $item) { ?>
					<table>
						<tr>
							<td class="list text-sm blue">●</td>
							<td><p class="text-sm blue mb-0 font-weight-bold"><?php echo $item?></p></td>
						</tr>
					</table>
				<?php } ?>
			</div>

			<div class="paragraph mt-3">
				<h1 class="title-sm mb-0"><?php echo $exp2['title']?></h1>
				<?php foreach ($exp2['items'] as $item) { ?>
					<table>
						<tr>
							<td class="list text-sm blue">●</td>
							<td><p class="text-sm blue mb-0 font-weight-bold"><?php echo $item?></p></td>
						</tr>
					</table>
				<?php } ?>
			</div>
		</div>
	</div>

	<?php include_once 'components/footer.php'; ?>
</body>
</html>