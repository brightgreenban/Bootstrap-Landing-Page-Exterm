<?php

$goods = array(
	array
	(
		'name' => 'Extherm ET-21',
		'price' => '1551',
		'image' => 'term_1.jpg'
	),
	array
	(
		'name' => 'OJ Electronics OTD2',
		'price' => '2 416',
		'image' => 'term_2.jpg'
	),
	array
	(
		'name' => 'OJ Electronics ETR2',
		'price' => '2 745',
		'image' => 'term_3.jpg'
	)
);

foreach($goods as $key => $value) {
	?>
	<div class="col-lg-4 text-center goods-block" style="display: visible;" id="good_3">
		<div class="good_1">
			<input type='hidden' name='id' value="<?=$value[0]?>">
			<img src="../img/<?=$value['image']?>" alt="Терморегуляторы" class="goods__img"/>
			<h5><?=$value['name']?></h5>
			<h5>от <?=$value['price']?> грн</h5>
			<button type="button" class="btn btn-primary btn-sm">Заказать</button>
			<!--<p class="goods-btn"><a id="buy-url" href="#">Buy</a></p>-->
		</div>
	</div>
	<?php
}

?>