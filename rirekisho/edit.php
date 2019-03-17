
<?php

  require "common.php";
  $id = $name = $dob = $gender = $subjects = $image = $address = null;
  $error = '';

  if(isset($_POST['submit'])){

    $id = (int)htmlspecialchars($_POST['id'], ENT_QUOTES, "UTF-8");
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, "UTF-8");
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES, "UTF-8");
    $dob = htmlspecialchars($_POST['dob'], ENT_QUOTES, "UTF-8");
    $gender = (int)htmlspecialchars($_POST['gender'], ENT_QUOTES, "UTF-8");
    $subjects =0;
    foreach ($_POST['subjects'] as $value) {
      $subjects += (int)$value;
    }
    $image = htmlspecialchars($_POST['prev_image'], ENT_QUOTES, "UTF-8");

    if(isset($_FILES['image'])){

      if($_FILES['image']['error']===UPLOAD_ERR_OK){

          $file_name = sha1_file($_FILES['image']['tmp_name']);
          $file_ext = array_pop(explode('/', mime_content_type($_FILES['image']['tmp_name'])));
          $file_name .= '.'.$file_ext;
          echo $file_name;
          if(isset($image) && $image !== 'noimage.jpg'){
            if(!unlink($image)) $error .= "Unable to delete File<b>";
          }
          $check =  move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$file_name);
          if(!$check) $error .= "Unable to upload the file<b>";
          else $image = $file_name;

        try{
          $pdo = connect();
          $st = $pdo->prepare('UPDATE resumes SET name=?,dob=?,gender=?,address=?,subjects=?,file=? WHERE id=?');
          $check =  $st->execute(array($name, $dob, $gender, $address, $subjects, $image, $id));
          if(!$check) $error .= "Unable to Update record int the Database<b>";
          $pdo = null;
          header('Location: index.php');
        }catch(PDOException $e){
          $error .= $e->getMessage();
          die();
        }
      }elseif($_FILES['image']['error']===UPLOAD_ERR_INI_SIZE ||$_FILES['image']['error']===UPLOAD_ERR_FORM_SIZE) $error .= "File too Large<br>";
  }}
  else{

  if(!isset($_GET['id'])) throw new RuntimeException('Invalid Accress');
  $id = (int)htmlspecialchars($_GET['id'], ENT_QUOTES, "UTF-8");
  try{
    $pdo = connect();
    $result = $pdo->query("SELECT * FROM resumes WHERE id={$id}")->fetch(PDO::FETCH_ASSOC);
    $name = $result['name'];
    $address = $result['address'];
    $dob = $result['dob'];
    $subjects = (int)$result['subjects'];
    $gender = (int)$result['gender'];
    $image = $result['file'];
    if(!isset($image)) $image = 'noimage.jpg';

    $pdo = null;
  }catch(PDOException $e){
    $error .= $e->getMessage();
  }
}
require "t_edit.php";
?>
