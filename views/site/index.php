<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Список событий</h1>
        <p>
            <?= Html::a('Создать событие', ['event/create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <div class="body-content">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,

            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'title',
                'content:ntext',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'controller' => 'event',
                ],
            ],
        ]); ?>

    </div>
</div>
