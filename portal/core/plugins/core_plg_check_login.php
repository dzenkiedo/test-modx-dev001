<?php
	$ctx = $modx->context->get('key');
	$isAuthenticated = $modx->user->hasSessionContext($ctx);
	var_dump($isAuthenticated);
	var_dump($modx->user->get("username"));
	die();