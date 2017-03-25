<?php

// Autoload 自动载入
require __DIR__.'/../../vendor/autoload.php';

require_once __DIR__."/../../bootstrap/App.php";

use common\app\components\helpers\CommonHelper;

echo CommonHelper::test();