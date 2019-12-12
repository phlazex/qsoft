#!/usr/bin/php
<?php

$line = '321123';

echo substr($line, strlen($line) / 2, strlen($line) - strlen('123'));
echo substr($line, -3);
echo strrev(str_replace('123', '', $line));
echo $line[3] . $line[4] . $line[0];
