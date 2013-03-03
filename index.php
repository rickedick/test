<?php

    $f = file_get_contents('http://tablaer.se');

  //  echo $f;

  $version = curl_version();
  echo '<pre>';
      print_r($version);
  echo '</pre>';
  echo 'kuken';
  echo 'ballaballa';
?>
