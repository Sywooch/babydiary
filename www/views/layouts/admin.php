<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\Lang;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

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
    <div id="background"></div>
    <?php $this->beginBody() ?>
        <div class="main-holder">
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="logo float-left">
                                        <?=Html::a('BabyDiary',['/'],['title'=>'Babydiary', 'class' => 'logo-href']);?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?= Lang::widget();?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <nav class="nav nav__primary">
                                        <ul id="topnav" class="sf-menu sf-js-enabled">
                                            <?php $currentUrl = Yii::$app->getRequest()->getLangUrl(); ?>
                                            <li class="first <?=(stristr($currentUrl, '/admin/home')) ? 'current-menu-item' : '';?>">
                                                <?=Html::a(Yii::t('ui', 'Home'), ['/admin/home']);?>
                                            </li>
                                            <li class="second <?=(stristr($currentUrl, '/admin/dictionaries')) ? 'current-menu-item' : '';?>">
                                                <?=Html::a(Yii::t('ui', 'Dictionaries'), ['/admin/dictionaries']);?>
                                            </li>
                                            <li class="third <?=(stristr($currentUrl, '/admin/diaries')) ? 'current-menu-item' : '';?>">
                                                <?=Html::a(Yii::t('ui', 'Diaries'), ['/admin/diaries']);?>
                                            </li>
                                            <li class="fourth <?=(stristr($currentUrl, '/admin/child')) ? 'current-menu-item' : '';?>">
                                                <?=Html::a(Yii::t('ui', 'Children'), ['/admin/child']);?>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                <?= Breadcrumbs::widget([
                                    'homeLink' => ['label' => Yii::t('ui', 'Admin panel'), 'url' => ['/admin']],
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                ]) ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="content-holder">
                <div class="container">
                    <?= $content ?>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright text-center">
                                <div if="footer-text" class="footer-text">
                                    <?=Html::a('BABYDIARY', ['/'], ['title' => Yii::t('ui', 'Babydiary title')]);?>&copy; <?= date('Y') ?>
                                    <a href="http://www.freepik.com/free-vector/greeting-card-for-valentine-s-day_764374.htm">Designed with Freepik</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    <?php $this->endBody();?>
    </body>
</html>
<?php $this->endPage() ?>