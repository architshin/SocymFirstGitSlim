<?php
use SocymSlim\FirstGitSlim\controllers\HelloController;

$app->any("/sayHello", HelloController::class.":sayHello");
$app->any("/sayHelloWithTemp", HelloController::class.":helloWithTemplate");
