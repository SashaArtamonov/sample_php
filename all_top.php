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
        <title>epamfun</title>
    </head>
    <body id="element">
        <header>
           <h1><center>&#1050;&#1086;&#1088;&#1086;&#1083;&#1077;&#1074;&#1072; EPAM</center></h1>
           <a href="index.php">&#1043;&#1086;&#1083;&#1086;&#1074;&#1085;&#1072;</a>
           <a href="all_top.php">&#x422;&#x43E;&#x43F; 3</a>
        </header>  
        <div id="dual">
            <?php require_once('ajax/ajax.top.php'); ?>
        </div>
        <footer><a href="">DevOps4life &copy 2018</a></footer>
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
    </body>
</html>		