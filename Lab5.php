<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
}
if(isset($argv[1])) {
     $host = $argv[1];
   } else {
     help();
   }
   
   if(isset($argv[2])) {
     $port = $argv[2];
   } else {
     help();
   }
   function help() 
   {
      echo "
         usage: phpServer host port
      ".PHP_EOL;
      exit();
   }
   system(sprintf('php -S %s:%s', $host, $port));