<?php
  $link = mysqli_connect("localhost","root","rootroot","practice");
  mysqli_query($link,"
  INSERT INTO w02 (
    title,
    description,
    created,
    address
  ) Value (
    'NEWS',
    'today NEWS is...',
    now(),
    'http://www.naver.com'
  )
  ");
?>
