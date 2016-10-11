<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>

<table width="1000" height="77" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td width="201" valign="top">
                <table width="201" height="77" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td background="images/index_31.gif">
                                <div align="center"><?=Yii::$app->setting->get('siteName')?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <td width="710" valign="top">
                <table width="719" height="70" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td valign="middle" background="images/index_32.gif">
                                <div align="center">
                                    <br>
                                    <?=Yii::$app->setting->get('address')?> TEL:<?=Yii::$app->setting->get('phone')?>
                                    FAX:<?=Yii::$app->setting->get('fax')?><br>
                                    <a target="_self" href="/" title="<?=Yii::$app->setting->get('copyright')?>"><?=Yii::$app->setting->get('copyright')?></a>. email:<?=Yii::$app->setting->get('email')?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td width="89">&nbsp;</td>
        </tr>
    </tbody>
</table>

    <map name="Map">
        <area shape="poly" coords="295,17" href="#">
        <area shape="rect" coords="280,17,338,32" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['/blog/default/catalog/', 'id'=> 16])?>" target="_blank">
    </map>
<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>