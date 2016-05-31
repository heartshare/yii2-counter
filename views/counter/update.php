<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model jkmssoft\counter\models\Counter */

$this->title = Yii::t('counter', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('counter', 'Counter'),
]).$model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('counter', 'Counters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('counter', 'Update');
?>
<div class="counter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>