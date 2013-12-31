<?php
// composer autoload
require 'vendor/autoload.php';

// instantiate the container
$container = new DI\Container();

// instantiate this class with any type hint dependencies resolved. Since Foo
// depends on Bar in the Foo construct, the $container will inject that class
// and the Foo construct will assign it to the local $bar property.
$foo = $container->get('MikeFunk\Test\Foo');

// without dependency injection this would be:
// $foo = new MikeFunk\Test\Foo;
// but the Bar dependency would not be resolved

// Foo::returnMe() calls Bar::returnMe() and returns it. This should say "this
// is from the bar class"
echo $foo->returnMe();
