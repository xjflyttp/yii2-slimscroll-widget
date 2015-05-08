<?php

namespace xj\js\slimscroll;

use yii\web\AssetBundle;

class SlimscrollAsset extends AssetBundle {

    public $sourcePath = '@bower/slimScroll';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.slimscroll.min.js'];
    public $depends = ['yii\web\JqueryAsset'];

}