<?php
use yii\widgets\Menu;
?>
<div class="menu-main" id="menu-main">
<?= Menu::widget([
    'options' => ['class' => 'menu-main'],
    'encodeLabels' => false,
    'items' => $menuItems
]);?>
</div>