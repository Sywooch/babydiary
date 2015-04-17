<?php
use yii\helpers\Url;
?>
<div id="lang">
    <ul id="langs">
        <?php foreach ($langs as $lang):?>
            <li class="item-lang">
                <a href="/<?=$lang->url.Yii::$app->getRequest()->getLangUrl();?>">
                    <img class="<?=($lang->name == $current->name) ? 'current' : ''?>" src="<?=Url::to('@web/css/images/flags/' . $lang->url . '.png', true);?>"/>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
</div>