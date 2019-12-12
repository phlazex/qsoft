#!/usr/bin/php
<?php

$items = ['where', 'is', 'my', 'money'];
$sum = 0;

for ($i = 0; $i < 100; $i++)
{
  if ($i % 5 === 0 && $i % 3 === 0)
    shuffle($items);
  elseif ($i % 5 === 0)
    $sum += $i;
  elseif ($i % 3 === 0)
    print($items[$i % 4] . PHP_EOL);
}

print_r($items);
