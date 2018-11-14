<?php

$ropes = array(
	array
	(
		'name' => 'Нагревательные кабели серии ETC',
		'price' => '1450',
		'image' => 'rope_1.png'
	),
	array
	(
		'name' => 'Нагревательные кабели серии ETТ',
		'price' => '2 211',
		'image' => 'rope_2.jpg'
	)
);

foreach($ropes as $key => $value) {
	?>
	<div class="col-lg-4 text-center goods-block" style="display: visible;" id="good_1">
		<div class="good_1">
			<input type='hidden' name='id' value="<?=$value[0]?>">
			<img src="../img/<?=$value['image']?>" alt="Терморегуляторы" class="goods__img"/>
			<h5><?=$value['name']?></h5>
			<h5>от <?=$value['price']?> грн</h5>
			<button type="button" class="btn btn-primary btn-sm btn-popup">Заказать</button>
			<!--<p class="goods-btn"><a id="buy-url" href="#">Buy</a></p>-->
		</div>
	</div>
	<?php
}

?>