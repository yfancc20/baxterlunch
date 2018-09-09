<?php
	$prev = 'agenda.php';
	
	$topics = [
		'9.22' => [
			[
				'time' => '10:30 - 11:00',
				'title' => 'Sharesource Connect Utility in Quality Control of CRRT',
				'name' => 'Prof. Ling Zhang',
			],
			[
				'time' => '15:30 - 16:00',
				'title' => 'Citrate Anticoagulation Protocols',
				'name' => 'Prof. Ashita Tolwani',
			],
		],
		'9.23' => [
			[
				'time' => '10:30 - 11:00',
				'title' => 'Sepsis/oXiris Therapy',
				'name' => 'Prof. Patrick Honoré',
			]
		],
	]
?>

<!DOCTYPE html>
<html>
<head>
	
<? require_once('components/head.php') ?>

<title>Baxter</title>

</head>
<body>
	<div class="wrapper agenda">
		<div class="content">
			<div class="paragraph">
				<div class="title-sm">Meet-the-Expert Sessions</div>
				<p class="text">Coffee Break | Taipei Marriott Hotel 3F - Salon 3/4</p>
			</div>
		</div>

		<div class="banner">
			<div class="d-flex">
				<span class="title">AGENDA</span>
				<span class="title ml-auto">
					22<span class="super">nd</span> - 23<span class="super">rd</span> Sep
				</span>
			</div>
		</div>

		<div class="content">
			<?
			$i = 0;
			foreach ($topics as $date => $content) {
				$i += 1;
			?>
				<div class="paragraph py-0 mt-3">
					<div class="title blue"><?=$date?></div>
				</div>

				<?php
				$j = 0;
				foreach ($content as $c) {
					$j += 1;
				?>
					<div class="paragraph pt-0">
						<div class="container-fluid px-0 pt-2">
							<div class="row">
								<div class="col-4 pr-0">
									<p class="text blue"><?=$c['time']?></p>
								</div>
								<div class="col-8">
									<p class="title-xs mb-0"><?=$c['title']?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-4 pr-0">
									<p class="text green font-weight-light">Experts to meet</p>
								</div>
								<div class="col-8">
									<p class="text gray mb-0"><?=$c['name']?></p>
								</div>
							</div>
						</div>
					</div>
				<?php
					if ($i < count($topics) || $j < count($content)) {
				?>
						<div class="dot-line"></div>
				<?
					}
				}
				?>
			<? } ?>
		</div>
	</div>

	<? require_once('components/footer.php'); ?>
</body>
</html>