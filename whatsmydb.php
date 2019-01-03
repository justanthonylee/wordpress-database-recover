<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome - Project by Anthony Rossbach</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style>
      html{
        height:100%;
        background: rgb(30,30,30);
      }
      body{
        display: block;
        font-weight: 300;
        background: rgb(30,30,30);
      	color: rgb(120,120,120);
        font-size: 17px;
        line-height: 1.37;
        font-weight:400;
        font-smooth: always;
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
      }
      a, a:link, a:visited {
      	transform: translate3d(0, 0, 0);
      	-webkit-transform: translate3d(0, 0, 0);
      	-moz-transform: translate3d(0, 0, 0);
      	-o-transform: translate3d(0, 0, 0);
      	transition: ease-in-out 0.1s;
      	-webkit-transition: ease-in-out 0.1s;
      	-moz-transition: ease-in-out 0.1s;
      	-o-transition: ease-in-out 0.1s;
      	position: relative;
        color: rgb(129,191,78);
      }

      a:hover, a:active {
      	text-decoration: none !important;
        color: rgba(129,191,78, 0.7);
      }
      h1, h2, h3{
        font-weight: 400;
        color: rgb(255,255,255);
        margin-top:0px;
        margin-bottom:15px;
      }
      pagename{
        display:block;
        margin: 0px auto;
        margin-top:70px;
        text-align:center;
        max-width:600px;
        padding:10px;
        font-size:28px;
        font-weight:600;
        color: rgb(255,255,255);
      }
      content{
        display:block;
        margin: 0px auto;
        margin-top:20px;
        text-align:left;
        max-width:600px;
        padding:10px;
        border-radius:9px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        -webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        -moz-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        background:rgb(40,40,40);
      }
      credits{
        display:block;
        margin: 0px auto;
        margin-top:20px;
        text-align:center;
        max-width:600px;
        padding:10px;
      }
      .block{
  			border-radius: 9px;
  			background:rgb(70,70,70);
        color:rgb(255,255,255);
        padding:10px;
        margin-bottom:10px;
      }
    </style>
  </head>
  <body>
    <pagename>Wordpress DB recovery</pagename>
    <content>
      <p>Hey so you need to see your Wordpress database info? Sure, here it is just this once. As a note this page is automatically deleted after visiting. You will need to install this script if you want to see this information again.</p>
      <?php
      //This is designed to work from the /wp-content/uploads folder.
      include("../../wp-config.php");

      echo "<div class='block'>";
      echo "<strong>Database Name</strong>: ";
      echo DB_NAME;
      echo "</div>";

      echo "<div class='block'>";
      echo "<strong>Database User</strong>: ";
      echo DB_USER;
      echo "</div>";

      echo "<div class='block'>";
      echo "<strong>Database Password</strong>: ";
      echo DB_PASSWORD;
      echo "</div>";

      echo "<div class='block'>";
      echo "<strong>Database Host</strong>: ";
      echo DB_HOST;
      echo "</div>";

      unlink('whatsmydb.php');

      ?>
    </content>
    <credits>Project by Anthony Rossbach on <a href='https://twitter.com/anthonyrossbach'>Twitter</a>, <a href='https://nodehost.cloud/community/view_profile?user=anthony'>NodeHost</a>, and <a href='https://github.com/anthonyrossbach'>Github</a>.</credits>
  </body>
</html>
