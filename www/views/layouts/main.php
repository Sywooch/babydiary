<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Lang;

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
                                            <li class="first current-menu-item">
                                                <a href="index" title="<?=Yii::t('ui', 'Main');?>"><?=Yii::t('ui', 'Main');?></a>
                                            </li>
                                            <li class="second">
                                                <a href="diary" title="<?=Yii::t('ui', 'Diary');?>"><?=Yii::t('ui', 'Diary');?></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <?= Breadcrumbs::widget([

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
                        <div class="span12">
                            <div class="copyright">
                                <div class="span9">
                                    <div if="footer-text" class="footer-text">
                                        <?=Html::a('BABYDIARY', ['/'], ['title' => Yii::t('ui', 'Babydiary title')]);?>&copy; <?= date('Y') ?>
                                    </div>
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