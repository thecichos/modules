<?php

$dirs = scandir("modules");
chdir("modules");
file_put_contents("loaded.json", '{"modules": []}');

  $rr = json_decode(file_get_contents("loaded.json"), true);
  for ($i=0; $i < count($dirs); $i++) {
    if (is_file($dirs[$i]) === false) {
      if ($dirs[$i] == '.' || $dirs[$i] == '..' || $dirs[$i] == 'loaded.json') {
      } else {
        if (isset($dirs[$i]) == true) {
          chdir(__DIR__ . "\modules\\" . $dirs[$i]);
          if (file_exists("config.json") == false) {
            echo "<script> console.log('module " . $dirs[$i] . " does not have a config file')</script>";
          } else {
            $file = json_decode(file_get_contents("config.json"), true);
            dirname(__DIR__);
            chdir("../");
            if (array_search($rr["modules"], $file) == false) {
              array_push($rr["modules"], $file);
            }
          }
          // var_dump(getcwd());
          // if (getcwd() === "C:\xampp\htdocs\modules\modules") {
          //   echo getcwd() . "<br>";
          //   file_put_contents("loaded.json", json_encode($rr));
          // }
        }
      }
    }
  }
  file_put_contents("loaded.json", json_encode($rr));
  for ($i=0; $i < count($rr["modules"]); $i++) {
    	chdir(getcwd() . "\\" . $rr["modules"][$i]["name"]);
      $tt = scandir(getcwd());
      for ($x=0; $x < count($tt); $x++) {
        if (strpos($tt[$x], ".php") == true) {
          include "$tt[$x]";
        }
      }
      chdir("../");
  }
 ?>
