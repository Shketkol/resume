<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\MainAsset;


MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3  no-margin">
                <aside class="main-sidebar">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- Sidebar user panel -->
                        <div class="user-panel">
                            <div class="image">
                                <img src="/source/img/photo.jpg" class="img-circle" alt="User Image">
                            </div>

                        </div>
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="active"><a href="/"> <span>Профиль</span></a></li>
<!--                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Работы</span></a></li>
-->                            <li><a href="source/file/CV_NickShkit_JuniorPHP.pdf"><span>Резюме</span></a></li>
                            <li><a href="/resume/contact"><i class="fa fa-circle-o text-aqua"></i> <span>Контакты</span></a></li>
                        </ul>
                        <div class="socia">
                            <a href="https://www.facebook.com/mykola.shkit"><img src="/source/img/fb.png" alt="" width="30px" height="30px"></a>
                            <a href="https://github.com/Shketkol"><img src="/source/img/git.png" alt=""width="30px" height="30px"></a>
                        </div>
                    </section>
                    <!-- /.sidebar -->
                </aside>
            </div>
            <div class="col-md-9  no-margin">
                <?=$content?>
            </div>
        </div>
    </div>
</header>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
