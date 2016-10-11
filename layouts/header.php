<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */

$categories = Yii::$app->getCatalogs();
?>

<table width="1000" height="106" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="193"><IMG SRC="/images/index_01.jpg" WIDTH=193 HEIGHT=106 ALT=""  style="display: block;"></td>
        <td valign="top">
            <table width="807" height="106" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="46" valign="top">
                        <table width="807" height="46" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="516" valign="top"><IMG SRC="/images/index_02.gif" WIDTH=516 HEIGHT=46 ALT="" style="display: block;"></td>
                                <td width="126"><IMG SRC="/images/index_03.gif" WIDTH=126 HEIGHT=46 ALT="" style="display: block;"></td>
                                <td width="165"><IMG SRC="/images/index_04.jpg" WIDTH=165 HEIGHT=46 ALT="" style="display: block;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        <table width="807" height="60" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="145">
                                    <a href="<?=$categories[0]['url']?>">
                                        <IMG SRC="/images/index_05.gif" ALT="" WIDTH=145 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="99">
                                    <a href="<?=$categories[1]['url']?>">
                                        <IMG SRC="/images/index_06.gif" ALT="" WIDTH=99 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="100">
                                    <a href="<?=$categories[2]['url']?>">
                                        <IMG SRC="/images/index_07.gif" ALT="" WIDTH=100 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="100">
                                    <a href="<?=$categories[3]['url']?>">
                                        <IMG SRC="/images/index_08.gif" ALT="" WIDTH=100 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="99">
                                    <a href="<?=$categories[4]['url']?>">
                                        <IMG SRC="/images/index_09.gif" ALT="" WIDTH=99 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="99">
                                    <a href="<?=$categories[5]['url']?>">
                                        <IMG SRC="/images/index_10.gif" ALT="" WIDTH=99 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="82">
                                    <a href="<?=$categories[6]['url']?>">
                                        <IMG SRC="/images/index_11.gif" ALT="" WIDTH=82 HEIGHT=60 border="0"  style="display: block;">
                                    </a>
                                </td>

                                <td width="83">
                                    <IMG SRC="/images/index_12.gif" WIDTH=83 HEIGHT=60 ALT=""  style="display: block;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table width="1000" height="35" border="0" cellpadding="0" cellspacing="0">
    <tr height="35px">
        <td style="height: 35px;margin:0px; padding:0px;">
            <img SRC="/images/index_13.gif" style="display: block;">
        </td>
    </tr>
</table>
