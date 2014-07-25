<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NEU</title>
        <meta name="description" content="A simple jQuery rotating / carousel plugin for text phrases powered by Animate.css and inspired by a Dota 2 hero, Morphling.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dist/animate.css">
        <link rel="stylesheet" href="dist/morphext.css">
    </head>
    <body style="height:100%;background:#000000 url(http://static.squarespace.com/static/53ce73b9e4b0847eddfdd0f8/t/53cfb989e4b095a8ca25b195/1406122506143/learnx%20hero%20image.jpg?format=1500w);background-size:cover;
    background-repeat: no-repeat;">
        <div style="text-align:center;margin: 150px 50px; font-size: 30px; line-height: 30px; font-family: Helvetica, Verdana, sans-serif; color: #ffffff;">
            Learn <b><span id="js-rotating">Coding, Baking, Basket Weaving </span></b>
            <br />
            <br />
            Increase your skills with lessons from Northeastern University.
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
        <!--<script src="morphext.js"></script>-->
        <script src="dist/morphext.js"></script>
        <script>
            $("#js-rotating").Morphext({
                animation: 'bounceIn'
            });
        </script>
    </body>
</html>