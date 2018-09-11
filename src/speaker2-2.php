<?php
	$prev = 'speaker2-1.php';
	$topDisplay = [true, true];
	
	$name = 'Prof. Ashita Tolwani';
	$exp2 = [
		'items' => [
			'2009, NxStage: Taking CRRT to the Next Stage 2009 Grant: A Pilot and Feasibility Study of Antimicrobial Dosing in CRRT',
			'2010-2012, UAB Department of Medicine Education Excellence Award',
			'2011, UAB Argus Award for Best Lecturer for the Renal Module for Class of 2013',
			'2012, UAB Outstanding Teacher in Nephrology',
			'2012, Argus Award for Best Lecturer for the UAB Renal Module for Class of 2015',
			'2013, Argus Award for Best Lecturer for the UAB Renal Module for Class of 2017',
			'2013, National Academy of Inventors Award'
		]
	];
	$exp3 = [
		'title' => 'Education',
		'items' => [
			'Harvard School of Public Health, Masters of Science in Epidemiology, 7/01-6/04',
			'University of Alabama at Birmingham, Nephrology Fellowship, 7/97 - 6/99',
			'University of Alabama at Birmingham, Internal Medicine Residency, 7/94 - 6/97',
			'University of Alabama at Birmingham School of Medicine, M.D., 7/90 - 6/94',
			'Birmingham-Southern College, Birmingham, AL, B.S. Mathematics / Biology, 9/86 - 6/90',
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
				<?php foreach ($exp2['items'] as $item) { ?>
					<table>
						<tr>
							<td class="list text-sm blue">●</td>
							<td><p class="text-sm blue mb-0 font-weight-bold"><?php echo $item?></p></td>
						</tr>
					</table>
				<?php } ?>
			</div>
			<div class="paragraph mt-3">
				<h1 class="title-sm mb-0"><?php echo $exp3['title']?></h1>
				<?php foreach ($exp3['items'] as $item) { ?>
					<table>
						<tr>
							<td class="list text-sm blue">●</td>
							<td><p class="text-sm blue mb-0 font-weight-bold"><?php echo $item?></p></td>
						</tr>
					</table>
				<?php } ?>
			</div>
			<div class="speaker-cv text-right">
				<a href="speaker_cv.php">
					<img src="/img/button-cv.png">
				</a>
			</div>
		</div>
	</div>

	<?php include_once 'components/footer.php'; ?>
</body>
</html>