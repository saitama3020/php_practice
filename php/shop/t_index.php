<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>麺屋</title>
    <link rel="stylesheet" href="shop.css">
  </head>
  <body>
    <h1>麺屋</h1>
    <table>
      <?php foreach ($goods as $g): ?>
        <tr>
          <td>
            <?php echo img_tag($g['code']) ?>
          </td>
          <td>
            <p class="goods"><?php echo $g['name']; ?></p>
            <p><?php echo nl2br($g['comment']); ?></p>
          </td>
          <td width="80">
            <p><?php echo $g['price']; ?> 円</p>
            <form action="cart.php" method="post">
              <select name="num">
                <?php
                for($i = 1; $i <= 9; $i++){
                  echo "<option>$i</option>";
                }
                ?>
              </select>
              <input type="hidden" name="code" value="<?php echo $g['code'] ?>" >
              <input type="submit" name="submit" value="カートへ">
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
