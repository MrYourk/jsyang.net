<?php

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


<head>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="container">

        <?= $content ?>
</div>

<footer class="footer">

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
