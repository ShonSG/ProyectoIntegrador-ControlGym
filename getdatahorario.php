<?php
$response ="  <link rel='stylesheet' href='css/all.css'>";

$response .="<h1>HOLA</h1>";
$response .=" <div class='form-group'>
<label>
  <input type='checkbox' class='flat-red'>
  Flat green skin checkbox
</label>

</div>";
$response .="<div class='form-group'>
<label>
  <input type='checkbox' class='minimal' checked>
</label>
<label>
  <input type='checkbox' class='minimal'>
</label>
<label>
  <input type='checkbox' class='minimal' disabled>
  Minimal skin checkbox
</label>
</div>";
$response .="<script src='css/icheck.min.js'></script>";

echo $response;
exit;
?>