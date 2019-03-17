<?php
  if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    ?>
 <h3>strposが非Falseを返しました</h3>
<center><b>あなたはインターネットエクスプローラーを使用しています。</b></center>
<?php
} else {
?>
<h3>strposがファルスを返しました。</h3>
<center>あなたはインターネットエクスプローラーを使用していません。</center>
<?php
}
?>
