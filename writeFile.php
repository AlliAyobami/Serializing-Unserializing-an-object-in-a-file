<?php
class Test{
   private $name;
   function __construct($arg){
      $this->name=$arg;
   }
}
$obj1=new Test("Bolaji");
$str=serialize($obj1);
$fd=fopen("obj.txt","w");
fwrite($fd, $str);
fclose($fd);
