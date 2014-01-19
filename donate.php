<?php
  set_include_path(dirname(__FILE__)."/../");
  require_once("login/classes/authentication.php");
  $membership = new authentication();
  $membership->confirmMember();
  if (isset($_COOKIE['user']))
  {
    $user = $_COOKIE['user'];
  }
  else
  {
    header("location: /../login/");
  }

?>