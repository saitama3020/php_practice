<?php
try{
  $user = 'saitama';
  $pass = 'pakkasgag31mes2l';

  $dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $sql = "SELECT * FROM users WHERE id = ?";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(1, 1, PDO::PARAM_INT);
  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
  $dbh= null;
}
catch(PDOException $e){
 var_dump($e);
}
 ?>


<?php
  var_dump($_POST);

  define("FILE_DIR", "F:/");


  $page_flag = 0;
  $clean = array();
  $error = array();

  if ( !empty($_POST) ) {
    foreach ($_POST as $key => $value) {
      $clean[$key] = htmlspecialchars ( $value, ENT_QUOTES);
    }
  }

  if( !empty($clean['btn_confirm']) ){

    $error = validation($clean);

    if( !empty($_FILES['attachment_file']['tmp_name']) ) {
      $upload_res = move_uploaded_file( $_FILES['attachment_file']['tmp_name'],
      FILE_DIR.$_FILES['attachment_file']['name']);

      if( $upload_res !== true ){
        $error[] = 'ファイルのアップロードに失敗しました。';
      }else{
        $clean['attachment_file'] = $_FILES['attachment_file']['name'];
      }
    }



    if( empty($error) ){
      $page_flag = 1;

      session_start();
      $_SESSION['page'] = true;
    }
  } elseif( !empty($clean['btn_submit'] )){

    session_start();
    if( !empty($_SESSION['page']) && $_SESSION['page'] === true){
      unset($_SESSION['page']);
      $page_flag = 2;


    $header = null;
    $auto_reply_subject = null;
    $auto_reply_text = null;
    $admin_reply_subject = null;
    $admin_reply_text = null;
    date_default_timezone_set('Asia/Tokyo');

    $header = "MIME-version: 1.0\n";
    $header .= "From: GRAYCODE <noreply@gray-code.com>\n";
    $header .= "Reply-to: GRAYCODE <noreply@gray-code.com\n";

    $auto_reply_subject =  'お問い合わせありがとうございます。';

    $auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
    下記の内容でお問い合わせを受け付けました。\n\n";
    $auto_reply_text .= "お問い合わせ時:" . date("Y-m-d H:i") . "\n";
    $auto_reply_text .= "氏名:" . $_POST['your_name']."\n";
    $auto_reply_text .= "メールアドレス:" . $_POST['email'] . "\n";


    if( $_POST['gender'] === "male" ) {
      $auto_reply_text .= "性別：男性\n";
    } else {
      $auto_reply_text .= "性別：女性\n";
     }

     if( $_POST['age'] === "1" ){
 		$auto_reply_text .= "年齢：〜19歳\n";
 	} elseif ( $_POST['age'] === "2" ){
 		$auto_reply_text .= "年齢：20歳〜29歳\n";
 	} elseif ( $_POST['age'] === "3" ){
 		$auto_reply_text .= "年齢：30歳〜39歳\n";
 	} elseif ( $_POST['age'] === "4" ){
 		$auto_reply_text .= "年齢：40歳〜49歳\n";
 	} elseif( $_POST['age'] === "5" ){
 		$auto_reply_text .= "年齢：50歳〜59歳\n";
 	} elseif( $_POST['age'] === "6" ){
 		$auto_reply_text .= "年齢：60歳〜\n";
 	}



    $auto_reply_text .= "お問い合わせ内容：" . nl2br($_POST['contact']) . "\n\n";
    $auto_reply_text .= "GRAYCODE 事務局";
    mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);

    // 運営側へ送るメールの件名
	$admin_reply_subject = "お問い合わせを受け付けました";

	// 本文を設定
	$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
	$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	$admin_reply_text .= "氏名：" . $_POST['your_name'] . "\n";
	$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";

  if( $_POST['gender'] === "male" ) {
		$admin_reply_text .= "性別：男性\n";
	} else {
		$admin_reply_text .= "性別：女性\n";
	}

	if( $_POST['age'] === "1" ){
		$admin_reply_text .= "年齢：〜19歳\n";
	} elseif ( $_POST['age'] === "2" ){
		$admin_reply_text .= "年齢：20歳〜29歳\n";
	} elseif ( $_POST['age'] === "3" ){
		$admin_reply_text .= "年齢：30歳〜39歳\n";
	} elseif ( $_POST['age'] === "4" ){
		$admin_reply_text .= "年齢：40歳〜49歳\n";
	} elseif( $_POST['age'] === "5" ){
		$admin_reply_text.= "年齢：50歳〜59歳\n";
	} elseif( $_POST['age'] === "6" ){
		$admin_reply_text.= "年齢：60歳〜\n";
	}

	$admin_reply_text .= "お問い合わせ内容：" . nl2br($_POST['contact']) . "\n\n";

	// 運営側へメール送信
	mb_send_mail( 'webmaster@gray-code.com', $admin_reply_subject, $admin_reply_text, $header);

  $user = 'saitama';
  $pass = "pakkasgag31mes2l";

  try {
    $dbh = new PDO("mysql:dbname=db1;host=localhost;charset=utf8", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "INSERT INTO users(name, email, sex, age, contact, filepath, agreement) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $clean['your_name'], PDO::PARAM_STR);
    $stmt->bindValue(2, $clean['email'], PDO::PARAM_STR);
    $stmt->bindValue(3, $clean['gender'], PDO::PARAM_STR);
    $stmt->bindValue(4, (int) $clean['age'], PDO::PARAM_INT);
    $stmt->bindValue(5, $clean['contact'], PDO::PARAM_STR);
    $stmt->bindValue(6, FILE_DIR.$clean['attachment_file'], PDO::PARAM_STR);
    $stmt->bindValue(7, $clean['agreement'], PDO::PARAM_BOOL);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
  } catch(PDOException $e) {
      print("エラー発生：" . $e->getMessage()."<br>");
      die();
  }




}else {
  $page_flag = 0;
}
}
  function validation($data) {
    $error = array();

    if( empty($data['your_name']) ) {
      $error[] = "[氏名]は必ず入力してください。";
    }elseif(20 < mb_strlen( $data['your_name']) ){
      $error[] = "[氏名] は20文字以内で入力してくだい。";
    }

    if( empty($data['email']) ) {
      $error[] = "[メールアドレス]は必ず入力してください。";
    } elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email'])){
      $error[] = "[メールアドレス] は正しい形式で入力してください。";
    }
    if( empty($data['gender']) ) {
      $error[] = "[性別]は必ず入力してください。";
    } elseif ( $data['gender'] !== 'male' && $data['gender'] !== 'female' ){
      $error = "[性別] は必ず入力してください。";
    }
    if( empty($data['age']) ) {
      $error[] = "[年齢]は必ず入力してください。";
    } elseif( (int)$data['age'] < 1 || 6 < (int)$data['age']){
      $error[] = "[年齢]は必ず入力してください。";
    }
    if( empty($data['contact']) ) {
      $error[] = "[お問い合わせ内容]は必ず入力してください。";
    }
    if( empty($data['agreement']) ) {
      $error[] = "プライバシーポリシーをご確認ください。";
    } elseif ( (int)$data['agreement'] !== 1 ) {
      $error[] = "プライバシーポリシーをご確認ください。";
    }

    return $error;
  }


 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>お問い合わせフォーム</h1>
    <?php if( $page_flag === 1): ?>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="element_wrap">
          <label>氏名</label>
          <p><?php echo $_POST['your_name'] ?></p>
        </div>
        <div class="element_wrap">
          <label>メイルアドレス</label>
          <p><?php echo $_POST['email'] ?></p>
        </div>
        <div class="element_wrap">
          <label>性別</label>
          <p><?php if( $_POST['gender'] === "male" ) { echo '男性'; }
            else { echo "女性"; }?></p>
        </div>
        <div class="element_wrap">
          <label>年齢</label>
          <p><?php if($_POST['age'] === "1"){ echo '～19歳'; }
          elseif($_POST['age'] === "2"){ echo '20歳～29歳'; }
          elseif($_POST['age'] === "3"){ echo '30歳～39歳'; }
          elseif($_POST['age'] === "4"){ echo '40歳～49歳'; }
          elseif($_POST['age'] === "5"){ echo '50歳～59歳'; }
          elseif($_POST['age'] === "6"){ echo '60歳～'; } ?>
        </div>
        <div class="element_wrap">
          <label>お問い合わせ内容</label>
          <p><?php echo nl2br($_POST['contact']); ?></p>
        </div>
        <?php if( !empty($clean['attachment_file']) ): ?>
          <div class="element_wrap">
            <label>画像ファイルの添付</label>
            <p><img src="<?php echo FILE_DIR.$clean['attachment_file']; ?>" ></p>
          </div>
        <?php endif; ?>
        <div class="element_wrap">
          <label for="agreement">プライバシーポリシーに同意する</label>
          <p><?php if($_POST['agreement'] === "1") { echo '同意する'; }
          else { echo "同意しない"; } ?></p>
        </div>
        <input type="submit" name="btn_confirm" value="入力内容を確認する">
        <input type="submit" name="btn_back" value="戻る">
        <input type="submit" name="btn_submit" value="送信">
        <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
        <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
        <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
        <?php if ( !empty($clean['attachment_file'])): ?>
        <input type="hidden" name="attachment_file" value="<?php echo $clean['attachment_file']; ?>">
      <?php endif; ?>
        <input type="hidden" name="agreement" value="<?php echo $_POST['agreement']; ?>">
      </form>
    <?php elseif ($page_flag === 2): ?>
      <p>送信が完了しまた。</p>
    <?php else: ?>

      <?php if( !empty($error) ): ?>
        <ul class = "error_list">
          <?php for($i = 0; $i < count($error); $i++ ): ?>
            <li><?php echo $error[$i]; ?> </li>
            <?php endfor; ?>
        </ul>
      <?php endif; ?>


    <form action="" method="post" enctype="multipart/form-data">
      <div class="element_wrap">
        <label>氏名</label>
        <input type="text" name="your_name" value="<?php if( !empty($_POST['your_name']) ){ echo $_POST['your_name']; } ?>">
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <input type="text" name="email" value="<?php if( !empty($_POST['email']) ) { echo $_POST['email']; } ?>">
      </div>
      <div class="element_wrap">
        <label>性別</label>
        <label for="gender_male"><input id="gender_male" type="radio" name="gender" value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] === "male") { echo 'checked';} ?>>男性</label>
        <label for="gender_female"><input id="gender_female" name="gender" value="female" type="radio" <?php if (!empty($_POST['gender']) && $_POST['gender'] === "female") { echo 'checked';} ?> >女性</label>
      </div>
      <div class="element_wrap">
        <label>年齢</label>
        <select name="age">
          <option value="">選択してください</option>
          <option value="1" <?php if (!empty($_POST['age']) && $_POST['age'] === "1") { echo 'selected';}?> >～19歳</option>
          <option value="2" <?php if (!empty($_POST['age']) && $_POST['age'] === "2") { echo 'selected';}?> >20歳～29歳</option>
          <option value="3" <?php if (!empty($_POST['age']) && $_POST['age'] === "3") { echo 'selected';}?> >30歳～39歳</option>
          <option value="4" <?php if (!empty($_POST['age']) && $_POST['age'] === "4") { echo 'selected';}?> >40歳～49歳</option>
          <option value="5" <?php if (!empty($_POST['age']) && $_POST['age'] === "5") { echo 'selected';}?> >50歳～59歳</option>
          <option value="6" <?php if (!empty($_POST['age']) && $_POST['age'] === "6") { echo 'selected';}?> >60歳～</option>

        </select>
      </div>
      <div class="element_wrap">
        <label>お問い合わせ内容</label>
        <textarea name="contact"><?php if (!empty($_POST['contact'])) { echo $_POST['contact']; } ?></textarea>
      </div>
      <div class="element_wrap">
        <label>画像ファイルの添付</label>
        <input type="file" name="attachment_file">
      </div>
      <div class="element_wrap">
        <label for="agreement"><input id="agreement" type="checkbox" name="agreement" value="1" <?php if (!empty($_POST['agreement']) && $_POST['agreement'] === "1") { echo 'checked';}?> >プライバシーポリシーに同意する</label>
      </div>
      <input type="submit" name="btn_confirm" value="入力内容を確認する">
    </form>
  <?php endif; ?>
  </body>
</html>
