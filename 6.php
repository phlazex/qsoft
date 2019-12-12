#!/usr/bin/php
<?php

$s = 2;

$items = [
  'key1' => 'value1',
  'key2' => 'value2',
  ];

foreach ($items as $key =>$value)
{
  if ((int)$value == 0)
  {
    echo $key . '...';
  }
}
