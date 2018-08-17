<?php
namespace diiimonn\assets;

use yii\web\AssetBundle;

/**
 * Class SpinnerExCanvasAsset
 * @package diiimonn\assets
 */
class SpinnerExCanvasAsset extends AssetBundle
{
    public $sourcePath = '@vendor/diiimonn/yii2-asset-spinner-canvas/source';

    public $js = [
        'js/excanvas.min.js'
    ];

    public $jsOptions = [
        'condition' => 'lt IE9'
    ];
}
