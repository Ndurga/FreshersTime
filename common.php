<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Review and C and C++ Languages">
  <meta name="keywords" content="Reviews, C Language, C++ Language, Fresher Interview Questions">
  <meta name="author" content="Durgaprasad N">
  <title>My Future</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./script/script.js" ></script>
  <script src="./script/jquery.js" ></script>
</head>

<script>
  $(document).ready(function(){
      $('.new_topic').hide();
      $('#resultsArea').hide();      
      $('.heading_top').click(function(){
        $(this).next().show();
        $(this).hide();
      });

      $('.new_topic h4').click(function(){
        $(this).parent().prev().show();
        $(this).parent().hide();
      });
  });
</script>
