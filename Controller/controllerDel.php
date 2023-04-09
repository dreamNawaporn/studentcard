<?php
  

  $identifier = htmlspecialchars($_GET["identifier"]);

  $obj_name = new Card();
  $rs2 = $obj_name->Del($identifier);

?>