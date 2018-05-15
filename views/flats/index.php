<?php 

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Квартиры</h1>
<ul>
	<?php foreach ($flats as $flat): ?>
		<il style="display: block;">
			<?= $flat->id ?>
			<?= $flat->region ?> - 
			<?= $flat->city ?> - 
			<?= $flat->street ?> - 
			<?= $flat->rooms ?> - 
			<?= $flat->floar ?>
		</il>
	<?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>