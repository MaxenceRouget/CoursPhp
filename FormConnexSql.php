<?php

$linkbdd = mysqli_connect('localhost','root','','sitephp');

if (mysqli_connect_error()){
  echo 'pas connecte ';
}

$UserIdGive = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$UserPWGive = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);

$reqRecupUser = 'SELECT User,PassWord FROM admin WHERE id=1';

$reqSelect = mysqli_query($linkbdd,$reqRecupUser);

$assoc = mysqli_fetch_assoc($reqSelect);


if ($UserIdGive == $assoc['User'])
{
  echo'Ca a marcher';
}
else
{
  echo "dommage";
}
