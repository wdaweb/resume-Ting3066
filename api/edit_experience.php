<?php
include_once "../base.php";


if(isset($_POST['sh']) || isset($_POST['del'])){

  foreach($_POST['id'] as $id){
    
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $Experience->del($id);
    }else{
      $row=$Experience->find($id);
      $row['sh']=(in_array($id,$_POST['sh']))?1:0;
      
      $Experience->save($row);
    }
  }
}else{
  $Experience->save($_POST);
}

to("../backend.php?do=experience");
?>