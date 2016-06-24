<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = $item->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">
    
    <div class="row">
		
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="<?= $item->image ?>" alt="<?= Html::encode($item->title) ?>">
			</div>
			<p><b><?= $item->price ?> руб.</b></p>
		</div>
		
		<div class="col-md-9">
			
			<h3><?= $item->title ?></h3>
			
			<p><?= $item->description ?></p>
			
		</div>
		
	</div>
	
</div>
