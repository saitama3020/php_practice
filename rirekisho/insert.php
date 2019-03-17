<?php
  require 'common.php';
  $name = $gender = $dob = $address = $subjects = $image = null;


  if(@$_POST['submit']){

    if(isset($_FILES['image'])){

     $temp = explode('/', mime_content_type($_FILES['image']['tmp_name']));
     $file_type = array_pop($temp);
     $file_name = sha1_file($_FILES['image']['tmp_name']) . '.' . $file_type;
     $check = move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$file_name);
     if(!$check) throw new RuntimeException('Unable to upload file');

     $image = $file_name;

    }

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $gender = (int)htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8');
    $dob = htmlspecialchars($_POST['dob'], ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');


    $subjects = 0;
    foreach ($_POST['subjects'] as $value) {
      $subjects += (int)$value;
    }

    try{
      $pdo = connect();
      $st = $pdo->prepare("INSERT INTO resumes(name,gender,dob,address,subjects,file) VALUES(?,?,?,?,?,?)");
      $check = $st->execute(array($name, $gender, $dob, $address, $subjects,$image));
      $pdo = null;
      if($check){
        echo "Added Successfully<br>";
      }else{
        echo "Faild in adding<br>";
      }
      header("Location: index.php");
    }catch(PDOException $e){
      print(htmlspecialchars($e->getMessage(), ENT_QUOTES)."<br>");
      die();
    }
}

?>
