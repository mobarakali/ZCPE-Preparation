<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 08-Apr-16
 * Time: 11:43 PM
 */

# normal declaration
$a = 'Hello';

var_dump($a);

#
$$a = 'World!';

var_dump($$a);

# My Try

$b = 'World!';

$$b = 'Where we live!';

echo '<br>';
echo '$$b = '. $$b;

echo '<br>';
echo "${'World!'}"; // same as $$b;

/*
 * Date: 8 April, 2016
 * Array Section will be covered later
 * Regarding Variables Variable
 * */