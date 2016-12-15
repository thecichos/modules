<div id="leftContainer">
  <script type="text/javascript">
  $(document).ready(function() {
    $("#leftContainer").css({
      "height": $("body").height() - ($("#footer").height() + $("#header").height()),
      "width" : ($("body").width() / 100) * 16,
      "position": "absolute",
      "top": $('#header').height()
    })
  $("#leftContainer").append("<div id=tab>")
  $("#tab").css({
    "height": "60px",
    "width": $(this).parent().width()
  })
  });
  </script>
</div>
