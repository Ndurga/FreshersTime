<?php
  include_once("header.php");
  include_once("common.php");
  include_once("css/style.css");
  include_once("changecurrentpage.php");
?>

<h4 class='inner_heading'>C Complete Refference</h4>

<?php
  $fileName = "C/1_c_basic.txt";
  $fp = fopen($fileName, 'r');
  if(!$fp){
    Echo "<p id='errorpage'>Sorry, error In loading page</p>";  //change later
    exit();
  }

  $fileSize = fileSize($fileName);
  $fileData = fread($fp, $fileSize);

  echo "<div class='c_container'>";
  echo $fileData;
  echo "</div>";
 ?>

<?php
  include("footer.phtml");
?>
