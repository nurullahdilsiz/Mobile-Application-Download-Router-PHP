<?php

$server = $_SERVER['HTTP_USER_AGENT'];

if (strpos($server,"iPhone")){
      header("Location: https://apps.apple.com/us/app");
}else if (strpos($server,"Android")){
     header("Location: https://play.google.com/store/apps/details");
}else{

  echo "<h1>Sory Your Pc !!<h1>";
}

?>
