<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$childName = "Кира";
$this->title = $childName . ": " . Yii::t('ui', 'Diary');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <div class="block">

            <h1><?= Html::encode($this->title) ?></h1>

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?=Yii::t('ui', 'Home');?></a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?=Yii::t('ui', 'Food');?></a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><?=Yii::t('ui', 'Health');?></a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><?=Yii::t('ui', 'Sleep and walks');?></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="freeze-panel">
                        <div class="loader"></div>
                    </div>
                    <div class="alert-panel">
                        <div class="alert alert-success" role="alert">Сообщение о том что всё ок</div>
                        <div class="alert alert-danger" role="alert">Что-то пошло не так</div>
                    </div>

                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div>
                            <?=$this->render('../templates/diaryGeneral');?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div>
                            <?=$this->render('../templates/diaryFood', ['solidFood' => $solidFood]);?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras sapien mi, facilisis et facilisis a, consectetur ut mauris. Fusce turpis augue, tristique venenatis nulla at, ullamcorper mattis justo. Nulla a augue eget felis fermentum tristique non porttitor est. Mauris dignissim nulla egestas dapibus consequat. Ut mattis metus venenatis, posuere est a, vehicula ante. Cras tincidunt commodo posuere. Etiam dignissim lacus neque. Mauris sodales nunc sit amet mi elementum elementum. Cras leo purus, mollis non urna quis, porttitor volutpat metus. Quisque aliquam, turpis ut vestibulum finibus, velit orci elementum mauris, eget varius enim ex eu lacus.</div>
                    <div role="tabpanel" class="tab-pane" id="settings">Ut fermentum metus sed maximus condimentum. Suspendisse sed risus porta, ultricies felis tincidunt, consectetur elit. Proin condimentum eget felis nec ullamcorper. Aliquam tempor ornare consequat. Pellentesque eget vehicula augue, tempor elementum est. Mauris vitae nulla nibh. In tristique semper augue vel aliquam. Nam imperdiet orci nec arcu luctus, non pulvinar ex aliquet.</div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/teeth');?>
    </div>
</div>