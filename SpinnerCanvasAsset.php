<?php
namespace diiimonn\assets;

use yii\web\AssetBundle;

/**
 * Class SpinnerCanvasAsset
 * @package diiimonn\assets
 */
class SpinnerCanvasAsset extends AssetBundle
{
    public $sourcePath = '@vendor/diiimonn/yii2-asset-spinner-canvas/source';

    public $depends = [
        'yii\web\JqueryAsset',
        'diiimonn\assets\SpinnerExCanvasAsset'
    ];

    public $js = [
        'js/spinners.min.js'
    ];
}
