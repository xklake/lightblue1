<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 10/10/16
 * Time: 3:57 PM
 */

    $posts = \funson86\blog\models\BlogPost::find()->where(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])->andWhere(['catalog_id'=> 16])->limit(5)->all();
?>



<table width="750" height="414" border="0" align="center" cellpadding="5" cellspacing="0">
    <tbody>
    <tr>
        <td width="354" valign="top">
            <table width="354" height="485" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td valign="top"><img src="/images/dhpsd.gif" width="354" height="485" alt=""></td>
                    </tr>
                </tbody>
            </table>
        </td>

        <td width="362" valign="top"><table width="362" height="485" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td width="362" height="170" valign="top">
                        <table width="362" height="170" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td height="40"><img src="/images/index_16.gif" alt="" width="362" height="40" border="0" usemap="#Map"></td>
                            </tr>

                            <tr>
                                <td height="130" valign="top">
                                    <table width="362" height="130" border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td width="109">
                                                <img src="/images/index_18.gif" width="109" height="130" alt="">
                                            </td>

                                            <td valign="top" background="/images/index_19.gif">
                                                <table width="253" height="130" border="0" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="top">
                                                                <table width="228" height="122" border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                        <?php foreach($posts as $item){?>
                                                                            <tr>
                                                                                <td width="18">&nbsp;</td>
                                                                                <td width="210">
                                                                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self"><?=$item->title?></a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody></table></td>
                            </tr>
                            </tbody></table></td>
                </tr>
                <tr>
                    <td height="187" valign="top"><table width="362" height="187" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td height="48">
                                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['/blog/default/catalog/', 'id'=> 30])?>">
                                        <img src="/images/index_20.gif" alt="" width="362" height="48" border="0">
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td height="139" valign="top"><table width="362" height="139" border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td width="113"><img src="/images/index_21.gif" width="113" height="139" alt=""></td>
                                            <td width="249" height="139" valign="top" background="/images/index_22.gif"><table width="218" height="131" border="0" cellpadding="0" cellspacing="0">
                                                    <tbody><tr>
                                                        <td height="31" valign="bottom">
                                                            <div align="center">干肠，红肠</div></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top"> <br>
                                                            　　旗下的Food Services食品部，负责在英国生产销售中国特色食品.</td>
                                                    </tr>
                                                    </tbody></table></td>
                                        </tr>
                                        </tbody></table></td>
                            </tr>
                            </tbody></table></td>
                </tr>
                <tr>
                    <td valign="top"><table width="362" border="0" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                                <td height="32"><img src="images/index_25.gif" width="362" height="32" alt=""  style="display: block;"></td>
                            </tr>
                            <tr>
                                <td height="96" valign="top"><table width="362" height="96" border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td width="124"><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> 26])?>" target="_self">
                                                    <img src="/images/index_27.gif" alt="" width="124" height="96" border="0"></a>
                                            </td>
                                            <td width="105"><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> 27])?>" target="_self">
                                                    <img src="/images/index_28.gif" alt="" width="105" height="96" border="0"></a>
                                            </td>
                                            <td width="133"><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> 28])?>" target="_self">
                                                    <img src="/images/index_29.gif" alt="" width="133" height="96" border="0"></a>
                                            </td>
                                        </tr>
                                        </tbody></table></td>
                            </tr>
                            </tbody></table></td>
                </tr>
                </tbody></table></td>
    </tr>
    </tbody>
</table>
