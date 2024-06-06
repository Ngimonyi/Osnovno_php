<?php
var_dump(time());
$expiresIn = time () + 60 * 60;


setcookie( user, ngimonyi, $expiresIn, '/');

var_dump ( $_COOKIE);

SETCOKIE('user', 'kjkjk', time() - 60 * 60, '/');