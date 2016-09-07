<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="all">
        <div id="header">
            <div id="logo"><a href="/"><img border="0" src="/images/logo_new.png" width="250"/></a></div>       
            <div id="ofic">
                <center>
                    Торговая компания «Русский Бизнес»<br/> 
                    Официальный представитель<br/>
                    <span size="2">TM GRASARO &nbsp; TM KERRANOVA </span><br/>
                    TM FORMAN TM HOTROCK
                </center>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <div id="add_header">
                <p>г.Москва, ул.Миклухо-Маклая, вл.8, стр.3,офис 105<br /> 
                E-mail: <a href="mailto:forman-99@mail.ru">forman-99@mail.ru</a></p>
            </div>      
            <div id="right_h">
                <div id="tell_head">
                    <span style="font-size: 13pt;">+7 (495) 781-20-70</span><br/>
                    <span style="font-size: 13pt;">+7 (495) 781-70-30</span><br/>
                    <span style="font-size: 13pt;">+7 (916) 971-76-67</span><br/>
                    <span style="font-size: 17.3333339691162px;">+7 (926) 268-75-21</span><br/>
                </div>
                <div id="perezvon">
                    <a href="/" class="mform">Мы вам перезвоним</a>
                </div>
                <div id="poisk">
                    <form action="http://rb-forman.ru/"  method="post" class="searchpoisk">
                        <label for="mod_search_searchword">
                            Поиск
                        </label>
                        <input name="searchword" id="mod_search_searchword" maxlength="20" class="inputboxpoisk" type="text" size="20" value="поиск..."  onblur="if(this.value=='') this.value='поиск...';" onfocus="if(this.value=='поиск...') this.value='';" /><input type="submit" value="" class="buttonpoisk"/>   <input type="hidden" name="option" value="com_search" />
                        <input type="hidden" name="task"   value="search" />
                        <input type="hidden" name="Itemid" value="1" />
                    </form>
                </div>          
            </div>
            <div id="main_menu">
                <ul class="menu" id="main_m">
                    <li id="current" class="item1">
                        <a href="<?= Url::to('/', true);?>"><span>Главная</span></a>
                    </li>
                    <li class="item2">
                        <a href="<?= Url::to('/about', true); ?>"><span> О компании</span></a>
                    </li>
                    <li class="item5">
                        <a href="<?= Url::to('/articles', true) ?>"><span>Статьи</span></a>
                    </li>
                    <li class="item26">
                        <a href="<?= Url::to('/dostavka', true) ?>"><span>Доставка</span></a>
                    </li>
                    <li class="item28">
                        <a href="<?= Url::to('akcii', true) ?>"><span>Акции</span></a>
                    </li>
                    <li class="item3">
                        <a href="<?= Url::to('/contact', true); ?>"><span>Контакты</span></a>
                    </li>
                    <li class="item603">
                        <a href="<?= Url::to('/optom', true) ?>"><span>Оптом</span></a>
                    </li>
                </ul>
            </div>  
        </div> 
        <div>
            <br />
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
