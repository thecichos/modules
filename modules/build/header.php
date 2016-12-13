<div id="header">
  <h1><script>var x = $.get("../modules/site.json").done(function(result) {
    $('#header').children("h1").text(result.name)
  });
  </script></h1>
</div>
