<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model frontend\models\Office */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [
    'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
]); ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
