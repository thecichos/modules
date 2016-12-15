<script type="text/javascript">
$(document).ready(function() {
  $("#leftContainer").children("#tab").append('<div class=tab id=modules> <span>modules')
  $(".tab").css({
    "height": $(this).parent().height() - 10,
    "margin": "12px",
    "border": "1px solid blue",
    "position": "absolute",
    "left": "0",
    "padding": "10px"
  })
  $("#modules").click(function() {
    console.log("blue");

    if ($(this).attr('class').search("chosen") != -1) {
      $(this).toggleClass('chosen');
      $(this).css('background-color', 'white');
    } else {
      $(this).toggleClass('chosen');
      $(this).css('background-color', 'red');
    }
  })


});

<?php
  chdir("../");
  $str = json_decode(file_get_contents("loaded.json"), true);
  $stri = "[";
  for ($i=0; $i < count($str["modules"]); $i++) {
    if ($i == 5) {
      $stri .= "'" . $str['modules'][$i]['name'] . "'";
    } else {
      $stri .= "'" . $str['modules'][$i]['name'] . "',";
    }
  }
  $stri .= "]";
  echo "var modules = " . $stri;
 ?>

</script>
