<?php

require '../registro/coon.php';

$sql = "UPDATE respuestas SET status='1'";
$res =$mysqli->query($sql);
if ($res) {
  echo "Success";
} else {
  echo "Failed";
}
