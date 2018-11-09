<?php

$mats = array(
	array
	(
		'name' => 'Нагревательные маты серии ET ЕСО',
		'price' => '1749',
		'image' => 'mat_1.jpg'
	),
	array
	(
		'name' => 'Нагревательные маты серии ETL',
		'price' => '2637',
		'image' => 'mat_2.jpg'
	)
);

foreach($mats as $key => $value) {
	?>
	<div class="col-lg-4 text-center goods-block" style="display: visible;" id="good_2">
		<input type='hidden' name='id' value="<?=$value[0]?>">
		<img src="../img/<?=$value['image']?>" alt="Терморегуляторы" class="goods__img"/>
		<h5><?=$value['name']?></h5>
		<h5>от <?=$value['price']?> грн</h5>
		<button type="button" class="btn btn-primary btn-sm">Заказать</button>
		<!--<p class="goods-btn"><a id="buy-url" href="#">Buy</a></p>-->
	</div>
	<?php
}

?>