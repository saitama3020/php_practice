<?php
  $namae = htmlspecialchars($_POST['namae']);
  echo "本当に{$namae}さんですか？";
 ?>
 <form class="" action="pagedata2c.php" method="post">
   <input type="hidden" name="namae" value="<?php echo $namae; ?>">
   <input type="submit" name="submit" value="Submit">
 </form>
