<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDIT</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>EDIT</h1>
    <p><?php echo $error; ?></p>

    <form action="edit.php" method="post" enctype="multipart/form-data">
      Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
      Gender: <input type="radio" name="gender" value="1" <?php if($gender === 1) echo 'checked'; ?>>M <input type="radio" name="gender" value="2" <?php if($gender === 2) echo 'checked'; ?>>F<br>
      Date of Birth: <input type="date" name="dob" value="<?php echo $dob; ?>"><br>
      address: <textarea name="address" rows='3' cols='60'><?php echo $address; ?></textarea><br>
      Subjects: <input type="checkbox" name="subjects[]" value="1" <?php if($subjects % 2===1) echo "checked"; ?>>N <input type="checkbox" name="subjects[]" value="2" <?php if($subjects ===3||$subjects ===6||$subjects ===7) echo "checked"; ?>>M
      <input type="checkbox" name="subjects[]" value="4" <?php if($subjects ===6||$subjects ===7) echo "checked"; ?>>S<br>
      Old Image: <?php echo "<img src=\"images/$image\"><br>"; ?>
      Update Image: <input type="file" name="image"><br>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="hidden" name="prev_image" value="<?php echo $image; ?>">
      <input type="submit" name="submit" value="Save Changes">
    </form>
  </body>
</html>
