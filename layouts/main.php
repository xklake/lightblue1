<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */



\frontend\web\template\lightblue1\Lightblue1Assets::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" height="100%">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= Html::encode(Yii::$app->params['keywords']) ?>" />
    <meta name="description" content="<?= Html::encode(Yii::$app->params['description']) ?>" />
    <meta name="author" content="panda cms">
    <title><?=$this->title?></title>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


    <script language="JavaScript" type="text/JavaScript">
        <!--
        function MM_jumpMenu(targ,selObj,restore){ //v3.0
            eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
            if (restore) selObj.selectedIndex=0;
        }
        //-->
    </script>

    <?php $this->head() ?>
</head><!--/head-->

<body BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<table width="1000" height="485" border="0" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td width="201" valign="top">
            <?= $this->render("leftnav.php")?>
        </td>

        <td width="8" valign="top" background="/images/bj.jpg">&nbsp;</td>

        <td width="788" valign="top" nowrap="" background="/images/bj.jpg">



            <?= $content ?>
        </td>
     </tr>
    </tbody>
</table>

<?= $this->render('footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
