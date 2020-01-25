<?php
use SocymSlim\FirstGitSlim\controllers\HelloController;

$app->setBasePath("/socymfirstgitslim/public");
$app->any("/sayHello", HelloController::class.":sayHello");
$app->any("/sayHelloWithTemp", HelloController::class.":helloWithTemplate");
