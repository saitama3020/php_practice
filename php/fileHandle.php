<h3>ファイルサインぷると書き込み読み込み</h3>
<?php

  $sFileName = date('YmdHis').'.'.'txt';
  $sPath = $sFileName;

  $sWriteContents = '1行目は１項目\t11行目は２項目\t11行目は３項目';
  $sWriteContents .= '2行目は１項目\t11行目は２項目\t11行目は３項目';
  $sWriteContents .= '3行目は１項目\t11行目は２項目\t11行目は３項目';

  if(file_exists($sPath)){
    echo '指定ファイルが既に存在しております。';
    exit;
  }else{
    echo '・ファイルの存在確認完了<br>';
  }

  if(touch($sPath)){
    echo "ファイル作成完了。<br>";
  }else{
    echo "ファイル作成失敗。<br>";
    exit;
  }
?>
