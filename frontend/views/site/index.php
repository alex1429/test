<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = $current->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
	.thumbnail {
		height: 320px;
		/*width: 33%;*/
		margin-right: 1em;
	}
	.thumbnail:last-of-type {
		margin-right: 0;
	}
</style>

<div class="site-index">
    
    <div class="row">
		
		<div class="col-md-3">
			<div class="list-group">
				<? foreach($categories as $category) { ?>
				<a href="?cid=<?= $category->id ?>" class="list-group-item<? if($category->id == $current->id) { echo ' active'; } ?>"><?= Html::encode($category->title) ?></a>
				<? } ?>
			</div>
		</div>
		
		<div class="col-md-9">
			
			<? foreach($items as $item) { ?>
			<div class="thumbnail col-md-3">
				<a href="/site/item/?id=<?= $item->id ?>"><img src="<?= $item->image ?>" alt="<?= Html::encode($item->title) ?>"></a>
				<div class="caption">
					<a href="/site/item/?id=<?= $item->id ?>"><p><b><?= Html::encode($item->title) ?></b></p></a>
					<p><?= Html::encode($item->price) ?> руб.</p>
				</div>
			</div>
			<? } ?>
			
		</div>
		
	</div>
	
</div>
