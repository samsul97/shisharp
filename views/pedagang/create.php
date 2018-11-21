<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pedagang */

$this->title = 'Create Pedagang';
$this->params['breadcrumbs'][] = ['label' => 'Pedagangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedagang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
