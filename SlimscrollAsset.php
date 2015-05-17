<?php

namespace xj\js\slimscroll;

use yii\web\AssetBundle;

class SlimscrollAsset extends AssetBundle {

    public $sourcePath = '@bower/slimscroll';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.slimscroll.min.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
