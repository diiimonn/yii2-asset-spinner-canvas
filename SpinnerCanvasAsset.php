<?php
namespace diiimonn\assets;

use yii\web\AssetBundle;

/**
 * Class SpinnerCanvasAsset
 * @package diiimonn\assets
 */
class SpinnerCanvasAsset extends AssetBundle
{
    public $sourcePath = '@bower/spinner-canvas/js/spinners';

    public $depends = [
        'yii\web\JqueryAsset',
        'diiimonn\assets\SpinnerExCanvasAsset'
    ];

    public $js = [
        'spinners.min.js'
    ];
}
