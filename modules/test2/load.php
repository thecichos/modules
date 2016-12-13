
<?php
if (file_exists("config.json") === true) {
  $file = file_get_contents("config.json");
  dirname(__DIR__);
  chdir("../");
  $rr = file_get_contents("loaded.json");
  if (strpos($rr, $file) === false) {
      $rr .= $file;
      file_put_contents("loaded.json", $rr);
  }
} else {
  echo "false";
}
// $dir = scandir(__DIR__);
// for ($i=0; $i < count($dir); $i++) {
//   if (strpos($dir[$i], ".php") == true) {
//     if (strpos($dir[$i], "load.php") === false) {
//       include $dir[$i];
//     }
//   }
// }

 ?>
