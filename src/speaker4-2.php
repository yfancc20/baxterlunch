<?php
	$prev = 'speaker4-1.php';
	
	$name = 'Dr. Ling Zhang, MD';
	$exp2 = [
		'items' => [
			'Poster: (1) Different Renal Replacement Therapy Modalities in Acute Kidney Injury Following Multiple Wasp Stings; (2) Simplified regional citrate anticoagulation using a calcium-containing replacement solution for continuous venovenous hemofiltration. CRRT International Conference, San Diego, USA, 2011, Feb 22-25.',
			'Poster: Saffty and efficacy of regional citrate anticoagulation in sustained low efficiency dialysis. WCN 2013, Hong Kong, 2013, May 31- June 4.'
		]
	];
	$exp3 = [
		'title' => 'Education',
		'items' => [
			'1999-2004: Huazhong University of Science and Technology Clinical Medicine B.S.',
			'2007-2010: Sichuan University Internal Medicine (Nephrology, CRRT) M.S.',
			'2012-2015: Sichuan University Internal Medicine (Nephrology, CRRT and AKI) Ph.D.',
			'2014-2015: Austin Health, University of Melbourne (AKI and CRRT) Research fellow',
		]
	];

?>

<!DOCTYPE html>
<html>
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