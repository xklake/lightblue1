<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 10/11/16
 * Time: 12:03 PM
 */
?>

<table width="791" height="28" border="0" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td background="/images/bt.gif">
            <table width="791" height="28" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="25">&nbsp;</td>
                    <td width="200">
                        <div align="center"><strong><?=$catalog->surname?></strong></div></td>
                    <td width="374">&nbsp; </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<table width="750" height="788" border="0" align="center" cellpadding="5" cellspacing="0">
    <tbody><tr>
        <td valign="top"><br>
            <table id="AutoNumber1" style="BORDER-COLLAPSE: collapse" width="550" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#666666">
                <tbody>
                    <?php
                    $posts = array_reverse($posts);
                    foreach($posts as $item){?>
                        <tr bgcolor="#EEFFFF">
                            <td width="29" height="25">
                                <div align="center"><img src="/images/gif-0306.gif" width="13" height="13">
                                </div>
                            </td>

                            <td width="423" height="25">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>" target="_self"><?=$item->title?></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p>&nbsp;</p>
        </td>
    </tr>
    </tbody>
</table>




