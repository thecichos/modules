<?php
$dirs = scandir("modules");
chdir("modules");
$dirs = array_filter(glob('*'), 'is_dir');
  if (strpos(file_get_contents("loaded.json"), "////do not remove////") === false) {
    file_put_contents("loaded.json", "////do not remove////");
  }
  for ($i=0; $i < count($dirs) + 3; $i++) {
    if (isset($dirs[$i]) == true) {
      chdir(__DIR__ . "\modules\\" . $dirs[$i]);
      $temp = scandir(__DIR__ . "\modules\\" . $dirs[$i]);
      for ($x=0; $x < count($temp); $x++) {
      if ($temp[$x] == "load.php") {
              include "load.php";
          }
      }
    }

  }
 ?>
