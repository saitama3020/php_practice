
<?php
  require 'common.php';
  $result = null;
  try{
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM resumes");
    $result = $st->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;
  }catch(PDOException $e){
    print(htmlspecialchars($e->getMessage(), ENT_QUOTES)."<br>");
    die();
  }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>履歴書一覧</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>履歴書一覧</h1>
    <table>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Subjects</th>
      </tr>
      <?php foreach ($result as $row): ?>
        <tr>
          <td><?php echo get_img_tag($row['id']); ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php if($row['gender']== 1){ echo "M";} elseif($row['gender']== 2) {echo "F";} ?></td>
          <td><?php echo $row['dob']; ?></td>
          <td><?php echo nl2br($row['address']); ?></td>
          <td><?php if((int)$row['subjects'] == 3)
                      echo 'NM';
                    elseif((int)$row['subjects'] == 5)
                      echo 'NS';
                    elseif((int)$row['subjects'] == 6)
                      echo 'MS';
                    elseif((int)$row['subjects'] == 7) {
                      echo 'NMS';
                    } ?>
          </td>
          <td>
            <?php
              echo '<a href="edit.php?id=' . $row['id'] . '">Edit</a>';
             ?>
          </td>
          <td>
            <?php
              echo '<a href="delete.php?id=' . $row['id'] . '">Delete</a>';
             ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <div>
      <a href="t_insert.php">Add new Records</a>
    </div>
  </body>
</html>
