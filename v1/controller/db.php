<?php

  class DB {

    private static $writeDbConnection;
    private static $readDbConnection;

    public static function connectWriteDb() {
      if(self::$writeDbConnection === null) {
        self::$writeDbConnection = new PDO('mysql:host=localhost;dbnam=tasksdb;charset=utf-8', 'root', '');
        self::$writeDbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        seld::$writeDbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }
      return self::$writeDbConnection;
    }

    public static function connectReadDb() {
      if(self::$readDbConnection === null) {
        self::$readDbConnection = new PDO('mysql:host=localhost;dbname=tasksdb;charset=utf-8', 'root', '');
        self::$readDbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        seld::$readDbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }
      return self::$readDbConnection;
    }


  }
?>
