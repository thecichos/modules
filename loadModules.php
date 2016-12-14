<?php

$dirs = scandir("modules");
chdir("modules");
file_put_contents("loaded.json", '{"modules": []}');
  // if (strpos(file_get_contents("loaded.json"), "////do not remove////") === false) {
  //   file_put_contents("loaded.json", "////do not remove////");
  // }
  for ($i=0; $i < count($dirs); $i++) {
    if (is_file($dirs[$i]) === false) {
      if ($dirs[$i] == '.' || $dirs[$i] == '..' || $dirs[$i] == 'loaded.json') {
      } else {
        // if (isset($dirs[$i]) == true) {
          chdir(__DIR__ . "\modules\\" . $dirs[$i]);
          echo "$dirs[$i] <br>";
          if (file_exists("config.json") == false) {
            echo "<script> console.log('module " . $dirs[$i] . " does not have a config file')</script>";
          } else {
            $file = json_decode(file_get_contents("config.json"), true);
            dirname(__DIR__);
            chdir("../");
            $rr = json_decode(file_get_contents("loaded.json"), true);
            echo array_search($file, $rr["modules"]) . "<br>";
            if (array_search($file, $rr["modules"]) === false) {
                array_push($rr["modules"], $file);
                file_put_contents("loaded.json", json_encode($rr));
            }
          }
          $temp = scandir(__DIR__ . "\modules\\" . $dirs[$i]);
          chdir(__DIR__ . "\modules\\" . $dirs[$i]);
          for ($x=0; $x < count($temp); $x++) {
            if (strpos($temp[$x], ".php") == true) {
              include "$temp[$x]";
            }
          }
        // }
      }
    }
  }
 ?>
