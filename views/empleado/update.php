<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */

$this->title = 'Update Empleado: ' . $model->c;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c, 'url' => ['view', 'id' => $model->c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
