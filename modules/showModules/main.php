<script type="text/javascript">
$(document).ready(function() {
  $("#leftContainer").children("#tab").append('<div class=tab id=modules> <span>modules')
  $("#modules").click(function() {
    <?php
      chdir("../");
      $str = json_decode(file_get_contents("loaded.json"), true);
      $stri = "[";
      for ($i=0; $i < count($str["modules"]); $i++) {
        if ($i == count($str["modules"])) {
          $stri .= $str["modules"][$i]["name"];
        } else {
          $stri .= $str["modules"][$i]["name"] . ",";
        }
      }
      $stri .= "]";
      echo "var modules = " . $stri;
     ?>
  })
});

</script>
