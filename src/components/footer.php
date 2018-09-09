<?php
	if (!isset($prev)) {
		$clickPrev = 'disabled';
		$prev = '';
	}
	
	if(!isset($next)) {
		$clickNext = 'disabled';
		$next = '';
	}

	$prevUrl = $prev;
	$nextUrl = $next;
?>

<div class="footer px-4 py-2">
	<div class="d-flex justify-content-center">
		<div class="d-inline-block">
			<a href="/cont.php">
				<img src="img/icon-home.png" class="icon">
			</a>
		</div>
		<div class="page ml-auto d-inline-block">
			<a href="<?=$prevUrl?>" class="<?=$clickPrev?>" <?=$clickPrev?>>
				<img src="img/icon-prev.png" class="icon">
			</a>
			<a href="<?=$nextUrl?>" class="<?=$clickNext?>" <?=$clickNext?>>
				<img src="img/icon-next.png" class="icon">
			</a>
		</div>
	</div>
</div>