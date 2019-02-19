<?php

/* @var $this \yii\web\View */

echo yii\bootstrap4\Tabs::widget([
    'encodeLabels' => false,
    'items' => [
        [
            'options' => ['id' => 'sponsors'],
            'label' => 'Sponsors',
            'content' => '<div>Sponsors Tab content</div>',
        ],
        [
            'label' => 'Participants <span class="tt">12</span>',
            'content' => '<div>Participants Tab content</div>',
        ],
        [
            'label' => 'Attendees',
            'content' => '<div>Attendees Tab content</div>',
        ],
        [
            'label' => 'Resources',
            'content' => '<div>Resources Tab content</div>',
        ],
    ],
]);