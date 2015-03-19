<?php
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

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
    <title>Бел-Янтэх. Карамель леденцовая фигурная.&nbsp; <?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="head">
            <div class="solidblockmenu">
                <?php
                echo Menu::widget([
                    'items' => [
                        // Important: you need to specify url as 'controller/action',
                        // not just as 'controller' even if default action is used.
                        ['label' => 'О НАС', 'url' => ['site/index']],
                        // 'Products' menu item will be selected as long as the route is 'product/index'
                        ['label' => 'ПРОДУКЦИЯ', 'url' => ['site/product']],
                        ['label' => 'КОНТАКТЫ', 'url' => ['site/contact']],
                    ],
                ]);
                ?>
            </div>
         </div>
        
        
        <div class="container">
            
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2009-<?= date('Y') ?> Бел-Янтэх</p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
