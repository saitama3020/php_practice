<?php
  require 'common.php';

  header('Access-Control-Allow-Origin: *');

  $(isset($_POST['name'])){
    try{
      $pdo = connect();

      $name = htmlspecialchars($_POST['name'], ENT_QUOTES, "UTF-8");
      $stmt = $pdo->prepare("SELECT * FROM resumes WHERE name=?");
      $stmt->bindParam(1, $name, PDO::PARAM_STR);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if(count($result)>0){
        echo json_encode(array('code'=>1, 'message'=>'Already exists'));
      }
      else{
        echo json_encode(array('code'=>0, 'message'=>'OK'));
      }
    }

  }


 ?>
