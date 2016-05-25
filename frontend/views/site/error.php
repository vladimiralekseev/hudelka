<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

//use yii\helpers\Html;

$this->title = $name;
?>
<div class="page">
	<div class="data">
		<div class="grad">
    <h1><?= $this->title ?></h1>

    <div class="alert alert-danger">
        <?= $message ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
</div>
</div>
