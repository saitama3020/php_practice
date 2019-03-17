<?php

  function connect(){
    return new PDO('mysql:dbname=rirekisho;charset=utf8;host=localhost', 'root', 'root');
  }

  function get_img_tag($id){
    $pdo = connect();
    $st = $pdo->query("SELECT file FROM resumes WHERE id={$id}");
    $file_name = $st->fetch(PDO::FETCH_ASSOC)['file'];
    if($file_name)
      return '<img src="images/' . $file_name . '">';
    else {
      return '<img src="images/' . 'noimage.jpg' . '">';
    }
  }


 ?>
