<?
$this->title = "Статьи";
//$this->keywords = $model["keywords"];
$this->registerMetaTag(['name'=>'keywords', 'content' => $model["keywords"]]);
$this->registerMetaTag(['name'=>'description', 'content' => $model["description"]]);
?>
<div class="page">
	<div class="data">
		<div class="grad">
		
		<h1><?=$this->title?></h1>
		
		<div class="list-articles">
		<?
		if($models) foreach ($models as $model){?>
		<div class="it">
			<div><a href="/health/<?=$model["code"]?>/"><?=$model["title"]?></a></div>
			<div class="descr"><?=$model["descr"];?></div>
		</div>
		<?}?>
		</div>
		</div>
	</div>
</div>