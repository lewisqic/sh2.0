<?php

require_once('kint.php');

function sd(...$vars)
{
    s(...$vars);
    exit;
}
Kint::$aliases[] = 'sd';

function ddd(...$vars)
{
    d(...$vars);
    exit;
}
Kint::$aliases[] = 'ddd';