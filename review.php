
<?php
  include("config.php");

  $stmt = mysqli_prepare($conn, "INSERT INTO `reviews` (`institute`, `subject`, `faculty`, `profilepic`, `subject_depth`, `complete_on_time`, `overall_rating`, `other_comments`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssssddds", $institute, $subject, $faculty, $profile_pic, $sub_dep_rating, $on_time_rating, $overall_rating, $comments);

  //check later
  $institute = $_REQUEST['institute'];
  $subject = $_REQUEST['subject'];
  $faculty = $_REQUEST['faculty'];
  $profile_pic = '';
  $sub_dep_rating = 0;                        //$_REQUEST['sub_dep_rating'];
  $on_time_rating = 0;                        //$_REQUEST['on_time_rating'];
  $overall_rating = 0;                        //$_REQUEST['overall_rating'];
  $comments = $_REQUEST['comments'];

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    echo "<h3>Thank you.. Your review has been submitted successfully ...</h3>";

?>

<input type="button" name="" value=""> <a href="writereview.php">Back</a>  </input>
<input type="button" name="" value=""> <a href="index.php">Home</a> </input>
