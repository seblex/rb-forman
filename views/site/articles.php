<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\data\Pagination;

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Статьи о стройматериалах'
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Стройматериалы статьи'
]);

?>

<?php foreach ($articles as $article):?>
	<?= Html::tag('H2', Html::encode($article->title)) ?>
	<?= Html::tag('p', $article->intro) ?>
	<?= Html::a('Подробнее', ['article/'.$article->alias], ['class' => 'btn btn-primary']) ?>
<?php endforeach;?>
<br />
<hr />
<center>
    <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel' => 'В начало',
        'lastPageLabel' => 'в конец',
        'prevPageLabel' => '&laquo'
    ])?>
</center>
                <span>Страница <?=$active_page?> из <?=$count_pages?></span>
           <div class="clear"></div>
