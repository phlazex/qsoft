#!/usr/bin/php
<?php

$a = 5;

function getValue1($a)
{
  return $a++;
}

function getValue2($a)
{
  return ++$a;
}

echo getValue1(getValue2(getValue2(getValue1(getValue1($a)))));
