<?php
  include_once("header.php");
  include_once("common.php");
  include_once("css/style.css");
  include_once("changecurrentpage.php");
?>

<h4 class='inner_heading'>Write your review</h4>

<section>
  <form class="reviewform" action="review.php" method="post" >
    <div class=""> <span>Institute</span> <span class="mandatary">*</span> <br>
    <input type="text" name="institute" value="" required></div>
    <div class=""> <span>Subject</span> <span class="mandatary">*</span> <br>
    <input type="text" name="subject" value="" required></div>
    <div class=""> <span>Faculty</span> <span class="mandatary">*</span> <br>
    <input type="text" name="faculty" value="" required></div>
    <span>Comments </span><br>
    <textarea name="comments" rows="8" cols="80"></textarea>

    <div class="rating writereviewrating">
      <div class="sub_rating">
        <span>Subject depth</span>
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
      </div>
      <div class="sub_rating">
        <span>Complet on time</span>
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
      </div>
      <div class="sub_rating">
        <span>Over all rating</span>
        <div class="stars">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
      </div>
    </div>
    <input type="submit" name="" value="Submit" id='submitBtn'>
  </form>
</section>

<?php
  include("footer.phtml");
?>
