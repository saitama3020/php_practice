<?php
  var_dump ( $_FILES);
  var_dump ( mime_content_type($_FILES['upload_file']['tmp_name']));
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>テスト</title>
   </head>
   <body>
     <form action="" method="post" enctype="multipart/form-data">
       <input type="file" name="upload_file">
       <div class="">
         <input type="submit" name="btn_submit" value="送信">
       </div>
     </form>
   </body>
 </html>
