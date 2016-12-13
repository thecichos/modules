<?php
  $warn = array();
 ?>

<script type="text/javascript">

  var obj =  <?php if (count($warn) === 0) {

  }echo implode(',', $warn); ?>
  console.warn("module" + obj);

  </script>
