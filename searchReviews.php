
<?php
  include("config.php");

  //check later
  $searchTxt = $_REQUEST['q'];
  $sel = "SELECT * FROM reviews where institute = '".$searchTxt."'"." OR subject = "."'".$searchTxt."'"." OR subject = "."'".$searchTxt."'";

  $res  = mysqli_query($conn, $sel);
  while($pro = mysqli_fetch_assoc($res)){
    $institute = $pro['institute'];
    $subject = $pro['subject'];
    $faculty = $pro['faculty'];
    $profilepic = $pro['profilepic'];
    $sub_depth = $pro['subject_depth'];
    $sub_complete_time = $pro['complete_on_time'];
    $overall_rating = $pro['overall_rating'];
    $other_comments = $pro['other_comments'];

    echo  "<div class='container'>";
    echo  "<div class='recentReviews'>";
    echo  "<section><div class='profile'>";
    echo  "<img id='image' src='images/dp.jpg' alt='No Image Available'>";
    echo  "<div class='overview'>
             <h4>Institute : <span>$institute</span></h3>
             <h4>Faculty : <span>$faculty</span></h3>
             <h4>Subject : <span>$subject</span></h4>
             <div class='rating'>
              <h4>Rating</h3>
              <div class='stars'>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
              </div>
             </div>
           </div>
           <div class='clear1'></div>
           <p>$other_comments</p>
           <button type='button' name='' id='moreBtn'> Click For More... </button>
           </div>
           </section>
           </div>
           </div>";
    }
    //close db connection
    mysqli_close($conn);
?>
