<?php
	$prev = 'speaker_cv.php';
	$next = 'speaker3-2.php';
	
	$name = 'Prof. Patrick Honoré, MD, PhD, FCCM';
	$exp1 = [
		'items' => [
			'Intensivist-Nephrologist Professor at the VUB faculty of Medicine Head of Clinics,ICU Dept',
			'Director of Critical Care Nephrology Dept<br>Universitair Ziekenhuis Brussel , VUB University B-1090 Brussels (Jette) BELGIUM',
		]
	];
	$exp2 = 'Patrick Honoré, graduated from Louvain Medical School as MD(1988), Specialist in Internal Medicine (1993), Intensive Care Specialist (1994) and Nephrologist (1995). During his internship, he completed more than 2 1/2 years specialisation in Nephrology and Dialysis.<br>
		For almost 5 years, he received ICU training abroad (United Kingdom, Australia and USA). Pr Honoré is Board member of the Belgian Intensive Care Society and closely involved in the Nephrology section of the European Society of Intensive Care Medicine. He is also a distinguished member or consultant of many scientific committees and decision-making organizations dedicated to diagnosis, treatment, and research in the field of acute kidney injury in the critically ill. Pr Honoré authored or co-authored more than 165 peer-reviewed papers , more than 600 abstracts and more than 75 book chapters . He was also editor of three books dedicated to Critical Care Nephrology. He has been invited as a speaker at more than 350 national and international conferences in almost 100 different countries.';

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
			<span class="title-sm text-white"><?=$name?></span>
		</div>

		<div class="content">
			<div class="paragraph mt-2">
				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-8 pr-0">
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
								<img src="/img/prof_3.jpg" class="w-100">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="paragraph mt-4">
				<p class="text-sm blue font-weight-bold">
					<?=$exp2?>
				</p>
			</div>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>