<?php
	$name = 'Prof. Patrick Honoré, MD, PhD, FCCM';
	$exp2 = 'He acts as reviewer for more than 45 international journals, including top-ranking journals in the field of critical care medicine and nephrol ogy. He is a member of the editorial board of several (15 ) high-standard journals. He is also Editor-In-Chief of the Journal of Translational Internal Medicine (open access) since 2013, editor-in-chief of Journal of Translational Critical Care Medicine & Journal of Translational Kidney Research since 2015 (open access too).He is also appointed as section editor for Renal in Annals of Intensive Care starting from Feb uary 2016.Since 2009, he fulltime fulfils the position of Head of Clin ics in the Intensive Care department of the University Hospital, Vrije Universiteit Brussels (VUB) and became Clinical Tutor and Senior Lecturer at the VUB Faculty of Medicine.Since 2012, he fulfils the position of Full Professor at the VUB Faculty of Medicine. In the ICU department, he leads the Critical Care Nephrology Platform which incorporates intensivists, nephrologists and nurses dedicated to daily education, research and treatment of acute kidney injury. In particular, he directs and organizes continuous renal replacement therapy on a 24/24; 7/7 on-call basis.He has also start a CRRT program using citrate dedicated to small children (less than 10 kg) in the UZB -PICU since 2013.';
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
				<p class="text-sm blue font-weight-bold">
					<?=$exp2?>
				</p>
			</div>

			<div class="speaker-cv text-right">
				<img src="/img/button-cv.png">
			</div>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>