<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

(require __DIR__ . '/../bootstrap/middleware.php')($app);

(require __DIR__ . '/../routes/web.php')($app);

$app->run();
