#!/usr/bin/php
<?php

$items = [
    ['sort' => 1],
    ['sort' => 3],
    ['sort' => 5],
    ['name' => 'item 1'],
    [
      ['sort' => 8],
      ['sort' => 10],
    ]
  ];
  
  $sum = 0;
  
  foreach ($items as $item)
  {
    $sum += $item['sort'];
  }
  
  echo $sum;

  print_r($items);
