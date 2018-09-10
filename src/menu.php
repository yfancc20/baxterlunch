<?php
	$prev = 'cont.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
<?php include_once 'components/head.php'; ?>

<title>Menu</title>

</head>
<body>
	<?php include_once 'components/header.php'; ?>

	<div class="wrapper menu">
		<div class="circles text-center mx-auto">
			<img src="img/spin_with_dot.png" class="bg">
			
			<a href="agenda.php">
				<img src="img/circle_agenda.png" class="top agenda">
			</a>
			<a href="speaker_cv.php">
				<img src="img/circle_speaker.png" class="top speaker">
			</a>
			<a href="http://www.apcrrt2018.com/programDaily.asp" target="_blank">
				<img src="img/circle_aki.png" class="top aki">
			</a>
		</div>
	</div>

	<?php include_once 'components/footer.php'; ?>
</body>
</html>