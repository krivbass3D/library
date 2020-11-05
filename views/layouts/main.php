<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;
use yii\helpers\Url;

PublicAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="public/images/logo.jpg" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Главная</a>

                    </li>
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="<?= Url::toRoute(['admin/book']);?>">Книги</a>

                    </li>
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Авторы</a>

                    </li>
                </ul>
                <!-- Регистрация
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <li><a href="#">Книги</a></li>
                        <li><a href="#">Авторы</a></li>
                    </ul>
                </div>
                -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>



<?= $content ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
