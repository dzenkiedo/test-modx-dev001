<?php
    var_dump($modx->event->name);
    $ctx = $modx->context->get('key');
    $isAuthenticated = $modx->user->hasSessionContext($ctx);
    var_dump($isAuthenticated);
    $user = $modx->user;
    $username = $user->get("username");
    var_dump($modx->user->get("username"));
    if ($isAuthenticated) {
        if($username != "(anonymous)") {
//        $modx->sendRedirect($modx->makeUrl(8));
            var_dump($username);
            var_dump($modx->user);
            die();
        } else {
            var_dump($username);
            die();
        }
    } else {
        die();
    }
