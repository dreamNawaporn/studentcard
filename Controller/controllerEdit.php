<?php
  //สร้างตัวแปร
  $first_name = $_POST['name_last'];
  $team = $_POST['Student_ID'];
  $position = $_POST['Major'];
  $image = $_POST['image'];
  

  //เรียกใช้
  $obj_name=new Card();
  $rs2=$obj_name->Edit($identifier,
  $first_name,
  $last_name,
  $team,
  $position,
  $image,
  $detail_user);

?>