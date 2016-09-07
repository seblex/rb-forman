<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;


$this->title = $article->title;
$this->params['breadcrumbs'][] = $this->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $article->description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $article->keywords
]);
?>

<?= $article->text?>