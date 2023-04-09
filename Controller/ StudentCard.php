<?php 
  //สร้างตัวแปร
  $first_name = $_POST['name_last'];
  $team = $_POST['Student_ID'];
  $position = $_POST['Major'];
  $image = $_POST['image'];



    $data=array();
    $data["name_last"]=$first_name;
    $data["Student_ID"]=$team;
    $data["Major"]=$position;
    $data["image"]=$image;
    
    
   
    $obj_name=new Card();
    $rs2= $obj_name->Add($data);


?>