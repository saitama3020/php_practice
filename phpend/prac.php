<?php
ini_set('session.use_trans_sid', true);
ini_set('session.use_cookies_only', false);
session_start();

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

?>

<p>
    こんにちは、あなたがこのページに来たのは　<?php echo $_SESSION['count']; ?>
</p>

<p>
    続けるには　<a href="nextpage.php?<?php htmlspecialchars(SID); ?>">　ここをクリックしてください。</a>
</p> 