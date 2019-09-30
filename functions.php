<?php
function makeContent($myContent, $myIndex){
  echo '<h1>'.$myContent[$myIndex][1].'</h1>';
  echo '<p>'.$myContent[$myIndex][2].'</p>';
}
function navitem($myNav, $i)
  {
      echo '<li><a href="'.$myNav[$i][1].'">'.$myNav[$i][0].'</a></li>';
  }
function makeNav($myNav, $loggedin)
{
    echo '<ul>';
    for($i=0;$i<count($myNav);$i++)
      {
        if($myNav[$i][2] == 'errbody' || ($myNav[$i][2] == 'loggedin' && $loggedin == True))
          {
            navitem($myNav, $i);
          }
      }
      echo '</ul>';
}
/*
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $myNav[0][0]; ?></title>
<link rel="stylesheet" href="">
*/
/*
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php makeContent($myContent,0); ?></title>
    <link rel="stylesheet" href="">
  </head>
  */