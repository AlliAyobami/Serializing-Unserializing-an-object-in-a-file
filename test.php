<?php

class Test{
   private $name;
   function __construct($arg){
      $this->name=$arg;
   }
   function getname(){
      return $this->name;
   }
}
$filename="obj.txt";
$fd=fopen("obj.txt","r"); 
echo "<br>";
$str=fread($fd, filesize($filename));
$obj=unserialize($str);
echo 'name: ' . $obj->getname();
