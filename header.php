<?php
  $hd = '<header><h1>My Future</h1><p>My review system</p></header>';
  echo $hd;

  $nv =  "<nav>
          <ul>
            <li id='review' class='current'><a href='index.php?page=review'>Reviews</a></li>
            <li id='c'><a href='cLanguage.php?page=c'>C Language</a></li>
            <li id='cpp'><a href='cpp.php?page=cpp'>C++ Language</a></li>
            <li id='aptitude'><a href='aptitude.php?page=aptitude'>Aptitude</a></li>
            <li id='reasoning'><a href='reasoning.php?page=reasoning'>Reasining</a></li>
          </ul>
        </nav>";
  echo $nv;
?>
