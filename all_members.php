<?php

require_once('init.php');
// START 1
require_once('process.php');
// END 1
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <title>zoommash</title>
    </head>
    <body id="element">
        <header>
            <h1><center>&#1050;&#1086;&#1088;&#1086;&#1083;&#1077;&#1074;&#1072; Zoom Support</center></h1>
           <a href="index.php">&#1043;&#1086;&#1083;&#1086;&#1074;&#1085;&#1072;</a>
           <a href="all_members.php">&#1056;&#1077;&#1081;&#1090;&#1080;&#1085;&#1075;</a>
        </header>  
        <div id="dual">
            <?php require_once('ajax/ajax.all.php'); ?>
        </div>
        <footer><a href="">Azaza Studio 2015 &copy</a></footer>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".photos").click(function() {
                    $("#loader").fadeIn("fast");
                    var tokenFirst  = $(".faces:first-child .photos").attr("data-token"),
                        tokenSecond = $(".faces:last-child .photos").attr("data-token"),
                        scoreFirst  = $(".faces:first-child .photos").attr("data-score"),
                        scoreSecond = $(".faces:last-child .photos").attr("data-score"),
                        winner,
                        looser,
                        wScore,
                        lScore;

                        if (tokenFirst == $(this).attr("data-token"))
                        {
                            winner = tokenFirst;
                            looser = tokenSecond;
                            wScore = scoreFirst;
                            lScore = scoreSecond;
                        }
                        else
                        {
                            winner = tokenSecond;
                            looser = tokenFirst;
                            wScore = scoreSecond;
                            lScore = scoreFirst;
                        }

                    $.ajax({
                        type: "post",
                        url: "index.php",
                        data: "winner=" + winner + "&looser=" + looser + "&wScore=" + wScore + "&lScore=" + lScore,
                        cache: false,
                        success: function(data) {
                            $("body").html(data);
                            $("#loader").fadeOut("fast");
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
 
          $(function() {
 
           $(window).scroll(function() {
 
           if($(this).scrollTop() != 0) {
  
            $('#toTop').fadeIn();
 
            } else {
 
            $('#toTop').fadeOut();
 
              }
 
                 });
 
          $('#toTop').click(function() {
 
           $('body,html').animate({scrollTop:0},800);
 
       });
 
});
 
</script>
<DIV ID = "toTop" >To the top</ DIV >
    </body>
</html>		