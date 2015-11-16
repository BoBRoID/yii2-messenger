<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 13.11.15
 * Time: 16:26
 */

namespace bobroid\messenger;

use yii\web\AssetBundle;


class ThemeairAssetBundle extends AssetBundle{

    public $sourcePath = '@vendor/bobroid/yii2-messenger/assets';

    public $css = [
        'css/messenger-theme-air.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'bobroid\messenger\MessengerAsset'
    ];

}