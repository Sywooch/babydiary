<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="main">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>


    </head>
    <body>
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
                                    тут будут кнопки соц. сетей
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <nav class="nav nav__primary">
                                        <ul id="topnav" class="sf-menu sf-js-enabled">
                                            <li class="first current-menu-item">
                                                <?=Html::a(Yii::t('ui', 'Home'), ['/']);?>
                                            </li>
                                            <li class="second">
                                                <?=Html::a(Yii::t('ui', 'Diary'), ['/diary']);?>
                                            </li>
                                            <li class="third">
                                                <?=Html::a(Yii::t('ui', 'Test'), ['/']);?>
                                            </li>
                                            <li class="forth">
                                                <?=Html::a(Yii::t('ui', 'Test'), ['/']);?>
                                            </li>
                                        </ul>
                                    </nav>
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


    <script type="text/javascript" src="js/angular/angular.js"></script>
    <script type="text/javascript" src="js/app/app.js"></script>
    <script type="text/javascript" src="js/app/directives.js"></script>
    <?php $this->endBody();?>
    </body>
</html>
<?php $this->endPage() ?>