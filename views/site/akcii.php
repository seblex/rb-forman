<?php

use yii\helpers\Html;

$this->title = $article->title;
$this->params['breadcrumbs'][] = $article->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $article->description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $article->keywords
]);
?>
<?= $article->text ?>