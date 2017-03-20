<?php
  $str = "This is some text. I will be using PHP string functions to change it";
  echo '<b>output:</b>';
  echo '<p>'.strtolower($str).'</p>';
  echo '<p>'.ucwords($str).'</p>';
  echo '<p>'.lcfirst($str).'</p>';
  echo '<p>'.str_replace('PHP','HTML',$str).'</p>';
  echo '<p>'.strrev($str).'</p>';
  echo '<p>'.str_shuffle($str).'</p>';
  echo '<b>The number of words in the string:</b>';
  echo '<p>'.str_word_count($str).'</p>';
  echo '<b>The number of characters in the string:</b>';
  echo '<p>'.strlen($str).'</p>';
  echo '<b>The word PHP starts at position:</b>';
  echo '<p>'.strpos($str,'PHP').'</p>';
  echo '<b>The word PHP starts at position:</b>';
  echo '<p>'.strpos($str,'PHP').'</p>';
  echo '<b>Encrypt string (one way)</b>';
  echo '<p>'.crypt($str,md5('123123')).'</p>';
?>
