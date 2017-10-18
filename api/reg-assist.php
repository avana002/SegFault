<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']."/");
require(ROOT."core/core.php");

if (array_key_exists("username", $_GET)) {
  // check for duplicate usernames
  $r = DB::query("SELECT uid FROM member WHERE username=%s", $_GET['username']);
  if (!empty($r)) {
    echo $lang['username-dup'];
  }
} elseif (array_key_exists("email", $_GET)) {
  // check for duplicate usernames
  $r = DB::query("SELECT uid FROM member WHERE email=%s", $_GET['email']);
  if (!empty($r)) {
    echo $lang['email-dup'];
  }
}



// $sql = "UPDATE forum_tags SET count=(SELECT COUNT(*) FROM forum_threads WHERE forum_tags.tagid LIKE '%,forum_tags.tagid,%')";