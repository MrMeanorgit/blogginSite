<?php
    include($_SERVER["DOCUMENT_ROOT"].'/home_blog_data/connect_mysqli.php');
 //creating posts for hom
  $array1 = array();
  $posts =  returnData($array1);
  function retunrPerticularData($ID){
  return retunrDataOfPerticularId($ID);
  }
?>