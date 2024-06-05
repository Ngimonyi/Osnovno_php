<?php

$name = "Mirko";

function variableScope()
{

    $name = 'Svemirko';

    echo $name;
}

echo $name;

variableScope();