<?php
/* @var $this yii\web\View */
?>

<main>
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <ng-view></ng-view>

        <p>
            <a href="#/diary">Diary</a>
            <div class="icon-spin4"></div>
        </p>
    </div>
</main>
<aside>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <widget-login></widget-login>
    </div>
</aside>