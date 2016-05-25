<?
$this->title = $model["title"];
//$this->keywords = $model["keywords"];
$this->registerMetaTag(['name'=>'keywords', 'content' => $model["keywords"]]);
$this->registerMetaTag(['name'=>'description', 'content' => $model["description"]]);
?>
<div class="page">
	<div class="data">
		<div class="grad">
			<h1><?=$model["title"]?></h1>
			<?=$model["text"];?>
		</div>
	</div>
</div>