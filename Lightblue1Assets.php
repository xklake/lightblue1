<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 06/09/16
 * Time: 3:40 PM
 */

namespace frontend\web\template\Lightblue1;
use yii\web\AssetBundle;


class Lightblue1Assets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/lightblue1/asset';


    public $css = [
        'css/css.css',
    ];

    public $js = [
        //'js/jquery.js',
        //'js/bootstrap.min.js',
        //'j/s/jquery.prettyPhoto.js',
        //'js/jquery.isotope.min.js',
        //'js/main.js',
        //'js/wow.min.js',
    ];

    public $depends = [
        // 'yii\web\YiiAsset',
        //'yii\web\JqueryAsset',
    ];
}
