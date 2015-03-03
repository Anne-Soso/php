<?php
  define('DSN','mysql:dbname=blog;host=localhost');
  define('USERNAME','root');
  define('PASSWORD','root');

  $options=[
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATT_ERRMODE=>PDO::ERRMODE_EXCEPTION
  ];
