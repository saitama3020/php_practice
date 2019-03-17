<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="kanri.css">
  </head>
  <body>
    <table>
      <?php foreach ($goods as $g): ?>
        <tr>
          <td>
            <?php echo img_tag($g['code']); ?>
          </td>
          <td>
            <p class="goods"><?php echo $g['name']; ?></p>
            <p><?php echo nl2br($g['comment']); ?></p>
          </td>
          <td width="80">
            <p><?php echo $g['price']; ?></p>
            <p><a href="edit.php?code=<?php echo $g['code']; ?>">修正</a></p>
            <p><a href="upload.php?code=<?php echo $g['code']; ?>">画像</p>
            <p><a href="delete.php?code=<?php echo $g['code'] ?>" onclick="return confirm('削除してよろしいですか？')">削除</p>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <div class="base">
      <a href="insert.php">新規追加</a>
      <a href="../index.php" target="_blank">サイト確認</a>
    </div>
  </body>
</html>
