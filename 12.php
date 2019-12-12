#!/usr/bin/php
<?php

$bd = array(array("author" => "Гоголь", "email" => "gogol@gogol.ru", "yob" => 1809, "books" => array(array("book" => "Мертвые души", "yop" => 1841), array("book" => "Вий", "yop" => 1834))), array("author" => "Пушкин", "email" => "aleksandr@sergeevich.ru", "yob" => 1799, "books" => array(array("book" => "Пиковая дама", "yop" => 1833), array("book" => "Борис годунов", "yop" => 1831), array("book" => "Пиковая дама", "yop" => 1833))), array("author" => "Достоевский", "email" => "fedor@dostoevskiy.ru", "yob" => 1821, "books" => array(array("book" => "Идиот", "yop" => 1869))));

foreach($bd as $author)
{
  echo "{$author['author']} - {$author['email']} - {$author['yob']}\n";
}

echo "\n";

foreach($bd as $author)
{
  foreach($author['books'] as $books)
  {
     echo "{$books['book']} - {$author['author']} - {$books['yop']}\n";
  }
}
