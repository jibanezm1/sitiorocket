<?php

use moonland\tinymce\TinyMCE;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']]); // important
?>
    <?=$form->field($model, 'titulo')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'subtitulo')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'cuerpo')->widget(TinyMCE::className(), [
    'toggle' => [
        'active' => true,
    ]])?>


    <?=$form->field($model, 'estado')->textInput(['value' => 1])?>

    <?=$form->field($model, 'Usuario')->textarea(['rows' => 1])?>

    <?=$form->field($model, 'foto')->fileInput()?>

    <div class="form-group">
        <?=Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
