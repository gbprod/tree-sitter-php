==========
Redeclare inherited private static property as public static.
==========

<?php
  class A
  {
      private static $p = "A::p (static)";
      static function showA()
      {
          echo self::$p . "\n";
      }
  }
  
  class B extends A
  {
      public static $p = "B::p (static)";
      static function showB()
      {
          echo self::$p . "\n";
      }
  }
  
  
  A::showA();
  
  B::showA();
  B::showB();
?>
--EXPECTF--
A::p (static)
A::p (static)
B::p (static)