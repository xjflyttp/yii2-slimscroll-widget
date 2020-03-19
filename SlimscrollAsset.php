<?php

namespace xj\js\slimscroll;

use yii\web\AssetBundle;

class SlimscrollAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-slimscroll';
    public $js = ['jquery.slimscroll.min.js'];
    public $depends = ['yii\web\JqueryAsset'];
	public $publishOptions = ['only' => ['jquery.slimscroll.min.js']];
}
