<?php

  require "common.php";
  $id = null;

  if(!isset($_GET['id'])) throw new RuntimeException('Invalid Access');

  else {
    $id = (int)htmlspecialchars($_GET['id'], ENT_QUOTES, "UTF-8");

    try{
      $pdo = connect();
      $st = $pdo->prepare('DELETE FROM resumes WHERE id=?');
      $result =  $st->execute(array($id));
      if($result){
        header('Location: index.php');
      }else{
        throw new RuntimeException("Unable to Delete");
      }
    }catch(PDOException $e){
      echo $e->getMessage();
      die();
    }
  }


?>
