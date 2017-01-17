<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model frontend\models\Office */

$this->title = 'Create test';
$this->params['breadcrumbs'][] = ['label' => 'Office', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
]) ?>
</div>
