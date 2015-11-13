<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 13.11.15
 * Time: 14:35
 */

namespace bobroid\messenger;


use yii\web\AssetBundle;

class ThemeflatAssetBundle extends AssetBundle{

    public $sourcePath = '@vendor/bobroid/yii2-messenger/assets';

    public $css = [
        'css/messenger-theme-future.css',
    ];

    public $js = [
        'js/messenger-theme-future.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'bobroid\messenger\MessengerAsset'
    ];

}