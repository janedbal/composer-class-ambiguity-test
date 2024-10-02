<?php

require __DIR__ . '/vendor/autoload.php';

$r = new ReflectionClass(\App\Foo\Duplicate::class);
echo $r->getName() . ' used from ' . $r->getFileName() . "\n";
