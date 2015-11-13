<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 11.11.15
 * Time: 13:16
 */

namespace bobroid\messenger;

use yii\web\AssetBundle;

class MessengerAsset extends AssetBundle{

    public $sourcePath = '@vendor/bobroid/yii2-messenger/assets';

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $css = [
        'css/messenger.css',
    ];

    public $js = [
        'js/messenger.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}