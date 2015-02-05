<?php
namespace diiimonn\assets;

use yii\web\AssetBundle;

/**
 * Class SpinnerExCanvasAsset
 * @package diiimonn\assets
 */
class SpinnerExCanvasAsset extends AssetBundle
{
    public $sourcePath = '@bower/spinner-canvas/js/excanvas';

    public $js = [
        'excanvas.js'
    ];

    public $jsOptions = [
        'condition' => 'lt IE9'
    ];
}
