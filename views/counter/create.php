<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model jkmssoft\counter\models\Counter */

$this->title = Yii::t('counter', 'Create Counter');
$this->params['breadcrumbs'][] = ['label' => Yii::t('counter', 'Counters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="counter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>