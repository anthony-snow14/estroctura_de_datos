<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'spacecase'
) or die(mysqli_erro($mysqli));

?>
