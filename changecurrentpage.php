<?php
  $page = $_REQUEST['page'];

  if("" != $page){
    echo "<script>";
    echo "$(document).ready(function(){";
    echo "$('.current').removeClass('current');";
    echo "$('#$page').addClass('current');";
    echo "}";
    echo ");";
    echo "</script>";
  }
?>
